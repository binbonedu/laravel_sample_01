<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentInClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_in_class', function(Blueprint $table) {
            $table->increments('id'); // identity
            $table->integer('student_id')->unsigned(); // ma hoc vien
            //$table->foreign('student_id')->references('id')->on('students'); // khoa ngoai lien ket voi hoc vien
            $table->integer('course_id')->unsigned(); // ma mon hoc
            //$table->foreign('course_id')->references('id')->on('courses'); // khoa ngoai lien ket voi mon hoc
            $table->integer('status'); // trang thai theo hoc
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
        Schema::dropIfExists('student_in_class');
    }
}
