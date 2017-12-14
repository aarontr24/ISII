<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $casts = [
        'sterilized' => 'boolean',
        'vaccine' => 'boolean',
    ];

    public function scopeLatest($query){
        return $query->orderBy("id","desc");
    }

    public function petImage(){
    	return $this->hasMany('App\PetImage');
    }

    // this is a recommended way to declare event handlers
    protected static function boot() {
        parent::boot();

        static::deleting(function($pet) { // before delete() method call this
             $pet->petImage()->delete();
             // do the rest of the cleanup...
        });
    }
}
