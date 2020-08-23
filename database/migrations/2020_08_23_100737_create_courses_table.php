<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('course_fee');
            $table->unsignedBigInteger('subject_id');
            $table->unsignedBigInteger('level_id');
            $table->unsignedBigInteger('duration_id');
            $table->unsignedBigInteger('lecturer_id');
            $table->timestamps();
            $table->foreign('subject_id')
                ->references('id')
                ->on('subjects')  
                ->onDelete('cascade');
            $table->foreign('level_id')
                ->references('id')
                ->on('levels')  
                ->onDelete('cascade');
            $table->foreign('duration_id')
                ->references('id')
                ->on('durations')  
                ->onDelete('cascade');
            $table->foreign('lecturer_id')
                ->references('id')
                ->on('lecturers')  
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
        Schema::dropIfExists('courses');
    }
}
