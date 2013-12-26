<?php

use Illuminate\Database\Migrations\Migration;

class CreateSimpleAdminTable extends Migration {

/**
 * Run the migrations.
 *
 * @return void
 */
    public function up()
    {
        Schema::create('simple_admin', function($table) {
        $table->increments('id');
        $table->string('name', 128);
        $table->text('content');
        $table->boolean('hidden');
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
        Schema::drop('simple_admin');
    }
}