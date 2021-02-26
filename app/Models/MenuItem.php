<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use CrudTrait;

    public static $menu_types = [
        'top' => 'верхнее',
        'bottom' => 'нижнее',
    ];

    public $blockcrud_ignore = true;
    
    protected $table = 'menu_items';
    protected $fillable = [
        'name', 
        'type', 
        'link', 
        'page_id', 
        'parent_id',
        'menu_type',
        'publish',
    ];

    /**
     * Get all menu items, in a hierarchical collection.
     * Only supports 2 levels of indentation.
     */
    public static function getTree($menu_type = 'top')
    {
        $menu = self::where('menu_type', $menu_type)->where('publish', 1)->orderBy('lft')->get();

        if ($menu->count()) {
            foreach ($menu as $k => $menu_item) {
                $menu_item->children = collect([]);

                foreach ($menu as $i => $menu_subitem) {
                    if ($menu_subitem->parent_id == $menu_item->id) {
                        $menu_item->children->push($menu_subitem);

                        // remove the subitem for the first level
                        $menu = $menu->reject(function ($item) use ($menu_subitem) {
                            return $item->id == $menu_subitem->id;
                        });
                    }
                }
            }
        }

        return $menu;
    }

    public function parent()
    {
        return $this->belongsTo('App\Models\MenuItem', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany('App\Models\MenuItem', 'parent_id');
    }

    public function page()
    {
        return $this->belongsTo('Backpack\PageManager\app\Models\Page', 'page_id');
    }

    public function url()
    {
        $this->link = ltrim($this->link, '/');
        
        switch ($this->type) {
            case 'external_link':
                return $this->link;
                break;

            case 'internal_link':
                return is_null($this->link) ? '#' : config('app.url') . '/' . $this->link;
                break;

            case 'old_link':
                return is_null($this->link) ? '#' : config('app.old_url') . '/' . $this->link;
                break;

            default: //page_link
                if ($this->page) {
                    return config('app.url') . '/' . $this->page->slug;
                }
                break;
        }
    }

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */

    public function getMenuTypeRusAttribute() {
        if(isset(self::$menu_types[$this->menu_type])) {
            return self::$menu_types[$this->menu_type];
        }

        return $this->menu_type;
    }

    public function getNameWithTypeAttribute()
    {
        return $this->name . ' (' . $this->menu_type_rus . ')';
    }
}
