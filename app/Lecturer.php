<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    protected $fillable=['name','photo','email','password','bachelor','bankaccount','university_id','subject_id'];
}
