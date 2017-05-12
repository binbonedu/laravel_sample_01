<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id'); // identity
            $table->string('student_code', 10); //ma hoc vien
            $table->string('fullname', 50); // ten hoc vien
            $table->integer('classroom_id')->unsigned(); // ma lop hoc
            //$table->foreign('classroom_id')->references('id')->on('classrooms'); // khoa ngoai lien ket voi lop hoc
            $table->string('year'); // nam hoc
            $table->integer('status'); // trang thai hoc vien
            $table->timestamps(); // create_at, update_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students'); // kiem tra bang, neu ton tai thi xoa
    }
}
