<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Mail;
use App\Mail\FichaAdoption;

class Ficha extends Model
{
    public function sendMail(){
    	Mail::to($this->email)->send(new FichaAdoption($this));
    }

    public function pet(){
    	return $this->belongsTo('App\Pet');
    }
}
