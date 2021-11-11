<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use Storage;

class Employee extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */
    public $blockcrud_title = 'Сотрудники';
    public $blockcrud_template = 'blocks.team';

    protected $table = 'employees';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    protected $with = ['department'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];
    protected $casts = [
        'extra_info' => 'array',
    ];

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
    public function department()
    {
        return $this->belongsTo('App\Models\Department');
    }

    public function blocks()
    {
        return $this->belongsToMany('Backpack\BlockCRUD\app\Models\BlockItem', 'block_entity', 'block_id', 'entity_id')
                    ->using('App\HelpModels\BlockSync')
                    ->withTimestamps()
                    ->wherePivot('entity_class', 'App\Models\Employee');
    }

    
    public function vacancy_category()
    {
        return $this->belongsTo('App\Models\VacancyCategory', 'vacancy_category_id');
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
        });
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
    public function setPhotoAttribute($value)
    {
        $attribute_name = "photo";
        $disk = 'public'; 
        $destination_path = "uploaded/employees"; 

        // if the image was erased
        if ($value==null) {
            Storage::disk($disk)->delete($this->{$attribute_name});
            $this->attributes[$attribute_name] = null;
        }

        // if a base64 was sent, store it in the db
        if (Str::startsWith($value, 'data:image'))
        {
            $image = Image::make($value)->encode('jpg', 90);
            $filename = md5($value . time()) . '.jpg';
            Storage::disk($disk)->put($destination_path . '/' . $filename, $image->stream());
            Storage::disk($disk)->delete($this->{$attribute_name});

            $public_destination_path = $destination_path;
            $this->attributes[$attribute_name] = $public_destination_path . '/' . $filename;
        }
    }
}
