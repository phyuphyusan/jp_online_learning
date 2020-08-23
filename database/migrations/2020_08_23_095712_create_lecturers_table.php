<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLecturersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecturers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('photo');
            $table->string('email');
            $table->string('password');
            $table->string('bachelor');
            $table->string('bankaccount');
            $table->unsignedBigInteger('university_id');
            $table->unsignedBigInteger('subject_id');
            $table->timestamps();
            $table->foreign('university_id')
                ->references('id')
                ->on('universities')  
                ->onDelete('cascade');
            $table->foreign('subject_id')
                ->references('id')
                ->on('subjects')  
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
        Schema::dropIfExists('lecturers');
    }
}
