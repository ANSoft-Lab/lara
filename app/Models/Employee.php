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
    protected $table = 'employees';
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
    public function department()
    {
        return $this->belongsTo('App\Models\Department');
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

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
        $destination_path = "uploads/employees"; 

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
