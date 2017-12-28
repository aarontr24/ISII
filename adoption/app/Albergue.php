<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Mail;
use App\Mail\MailAlbergue;

class Albergue extends Model
{
    public function sendMail(){
    	Mail::to($this->email)->send(new MailAlbergue($this));
    }
}
