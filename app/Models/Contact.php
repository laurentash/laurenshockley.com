<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;
use App\Mail\ContactMail;

class Contact extends Model
{
    use HasFactory;

    public $fillable = ['email', 'message', 'first_name', 'last_name'];

      

    public static function boot() {
        parent::boot();
        static::created(function ($item) {
            $adminEmail = "laurenshockleyswebsite@gmail.com";
            Mail::to($adminEmail)->send(new ContactMail($item));
        });
       
     }
}
