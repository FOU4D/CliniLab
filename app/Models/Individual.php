<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Individual extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'individuals';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];

    protected $casts = [ 'address' => 'array', 'phones' => 'array',];
    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    *
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
        public function institutions()
        {
            return $this->belongsToMany('App\Models\Institution', 'individual_institution');
        }
    	public function indkeycontact()
    	{
        	return $this->hasMany('App\Models\Institution', 'key_contact', 'id');
    	}

	public function visits()
    	{
        	return $this->hasMany('App\Models\Visit');
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


//public function setAddressAttribute($value)
//{
//    $this->attributes['address'] = json_encode($value);
//}

//public function getAddressAttribute($value)
//{
//    return json_decode($value, true);
//}


//public function setPhonesAttribute($value)
//{
//    $this->attributes['phones'] = json_encode($value);
//}

//public function getPhonesAttribute($value)
//{
//    return json_decode($value, true);
//}









    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */


   



}
