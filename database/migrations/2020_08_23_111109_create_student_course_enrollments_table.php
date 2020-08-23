<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentCourseEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_course_enrollments', function (Blueprint $table) {
            $table->id();
            $table->text('date_of_enrollment');
            $table->text('date_of_complement');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('payment_id');
            $table->unsignedBigInteger('course_id');
            $table->timestamps();
            $table->foreign('student_id')
                ->references('id')
                ->on('students')  
                ->onDelete('cascade');
            $table->foreign('payment_id')
                ->references('id')
                ->on('payments')  
                ->onDelete('cascade');
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
        Schema::dropIfExists('student_course_enrollments');
    }
}
