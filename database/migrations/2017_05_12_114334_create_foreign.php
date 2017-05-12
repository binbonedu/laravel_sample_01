<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('classrooms', function (Blueprint $table) {
            $table->foreign('department_id')->references('id')->on('departments'); // khoa ngoai lien ket voi khoa
        });

        Schema::table('students', function (Blueprint $table) {
            $table->foreign('classroom_id')->references('id')->on('classrooms'); // khoa ngoai lien ket voi lop hoc
        });

        Schema::table('student_in_class', function (Blueprint $table) {
            $table->foreign('student_id')->references('id')->on('students'); // khoa ngoai lien ket voi hoc vien
            $table->foreign('course_id')->references('id')->on('courses'); // khoa ngoai lien ket voi mon hoc
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
