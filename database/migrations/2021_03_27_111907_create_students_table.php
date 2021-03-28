<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name');        

            $table->timestamps();
        });
        Schema::create('subjects', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name');

            $table->timestamps();
        });
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name');

            $table->timestamps();
        });
        Schema::create('study', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('sub_id')->unsigned();
            $table->integer('s_id')->unsigned();

            $table->foreign('sub_id')->references('id')->on('subjects')->onDelete('cascade');
            $table->foreign('s_id')->references('id')->on('students')->onDelete('cascade');

            $table->timestamps();
        });
        Schema::create('teaches', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sub_id')->unsigned();
            $table->integer('t_id')->unsigned();

            $table->foreign('sub_id')->references('id')->on('subjects')->onDelete('cascade');
            $table->foreign('t_id')->references('id')->on('teachers')->onDelete('cascade');

            $table->timestamps();
        });


Schema::create('student_study_teacher', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('study_student_id')->unsigned();
            $table->integer('study_course_id')->unsigned();
            $table->integer('teach_teacher_id')->unsigned();

            $table->foreign('study_student_id')->references('s_id')->on('study')->onDelete('cascade');
            $table->foreign('study_course_id')->references('sub_id')->on('study')->onDelete('cascade');
            $table->foreign('teach_teacher_id')->references('t_id')->on('teaches')->onDelete('cascade');

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
