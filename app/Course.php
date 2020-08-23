<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable=['name','course_fee','subject_id','level_id','duration_id','lecturer_id'];
}
