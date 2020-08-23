<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursedetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coursedetails', function (Blueprint $table) {
            $table->id();
            $table->integer('number_of_reading');
            $table->integer('number_of_video');
            $table->integer('number_of_assignment');
            $table->unsignedBigInteger('course_id');
            $table->timestamps();
            $table->foreign('course_id')
                ->references('id')
                ->on('courses')  
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coursedetails');
    }
}
