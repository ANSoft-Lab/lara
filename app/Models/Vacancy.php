<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory, CrudTrait;

/*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */
    public $blockcrud_title = 'Вакансии';
    public $blockcrud_template = 'blocks.vacancies';

    public static $allowed_file_types = [
        '.doc',
        '.docx',
        '.pdf',
        '.rtf',
    ];

    protected $table = 'vacancies';
    protected $guarded = ['id'];
    protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public static function getAcceptString() :string
    {
        return implode(',', self::$allowed_file_types);
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function city()
    {
        return $this->belongsTo('App\Models\City');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\VacancyCategory', 'category_id');
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
    public function getUrlAttribute() {
        return url('job/' . $this->slug);
    }

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
