<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('username');
            $table->string('firstname')->default('');
            $table->string('lastname')->default('');
            $table->integer('mobile')->default(0);
            $table->string('school')->default('');
            $table->integer('form')->default(1);
            $table->string('type')->default('student');
            $table->integer('points')->default(1000);
            $table->string('email')->unique();
            $table->string('bio')->default('');
            $table->string('subjects')->default('');
            $table->integer('rate')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('active')->default(true);
            $table->string('password');
            $table->string('country')->default('Tanzania');
            $table->string('city')->default('Dar es salaam');
            $table->string('district')->default('Kibamba');
            $table->string('ward')->default('Kimara');
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
        Schema::dropIfExists('users');
    }
}
