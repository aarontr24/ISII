<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PetImage extends Model
{
	protected $fillable = ["pet_id","image"];
    public static function createPetImage($pet_id, $image){
    	return PetImage::create([
    		"pet_id" => $pet_id,
    		"image" => $image
    	]);
    }
}
