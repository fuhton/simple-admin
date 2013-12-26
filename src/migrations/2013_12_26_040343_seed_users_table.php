<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedUsersTable extends Migration {

/**
 * Run the migrations.
 *
 * @return void
 */
    public function up()
        {
            DB::table('users')->insert(
                array(
                    array(
                        'username' => 'simple-admin',
                        'email' => 'simple-admin@example.org',
                        'password' => Hash::make('letmein'),
                        'account_type' => 'admin',
                    )
                )
            );
        }

/**
 * Reverse the migrations.
 *
 * @return void
 */
        public function down()
            {

            }
}