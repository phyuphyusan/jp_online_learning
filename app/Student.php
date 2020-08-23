<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=['name','email','password','bachelor','date_of_registration','date_of_latest_login'];
}
