<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guard',function($table){
            $table->increments('id');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('surname');
            $table->string('gender');
            $table->string('contact');
            $table->string('address');
            $table->string('post');
            $table->string('status');

            $table->float('sss');
            $table->float('philhealth');
            $table->float('tin');
            $table->float('pagibig');
            $table->float('nbi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('guard');
    }
}
