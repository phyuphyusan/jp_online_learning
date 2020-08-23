<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coursedetail extends Model
{
    protected $fillable=['number_of_reading','number_of_video','number_of_assignment','course_id'];
}
