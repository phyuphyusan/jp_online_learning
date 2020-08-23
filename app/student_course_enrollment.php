<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student_course_enrollment extends Model
{
    protected $fillable=['date_of_enrollment','date_of_complement','student_id','payment_id','course_id'];
}
