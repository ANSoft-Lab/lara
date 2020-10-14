<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    public $blockcrud_title = 'Вопросы';
    public $blockcrud_template = 'blocks.faq';

    protected $table = 'faq';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function blocks()
    {
        return $this->belongsToMany('Backpack\BlockCRUD\app\Models\BlockItem', 'block_entity', 'block_id', 'entity_id')
                    ->using('App\HelpModels\BlockSync')
                    ->withTimestamps()
                    ->wherePivot('entity_class', 'App\Models\Faq');
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */
    public function scopeBlock($query, $block)
    {
        return $query->whereHas('blocks', function($q) use($block) {
            $q->where('slug', $block);
        })->orderBy('show_order');
    }

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
