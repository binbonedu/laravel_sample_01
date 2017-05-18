<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFixUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table) {
            $table->string('address')->nullable();

            // cach 1
            // $table->string('name')->nullable();
            
            // cach 2
            // $table->string('name', 50)->nullable()->change();

            // chuyen kieu du lieu
            // $table->int('name')->nullable()->change();

            // sua ten cot
            // $table->renameColumn('name', 'fulname');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasColumn('name'))
            {
                // cach 1
                // $table->dropColumn('name');
            }
        });
    }
}
