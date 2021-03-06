<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);

            $table->string('first_name');
            $table->string('last_name');
            $table->string('telephone');
            $table->string('company');
            $table->string('Address1');
            $table->string('Address2');
            $table->string('city');
            $table->string('post_code');
            $table->string('country');
            $table->string('region');
            $table->string('_token');


            $table->rememberToken();
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
        Schema::drop('users');
    }
}
