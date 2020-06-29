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
            $table->text('fname');
            $table->text('lname');
            $table->text('doby')->nullable();
            $table->text('dobm')->nullable();
            $table->text('dobd')->nullable();
            $table->text('email')->unique();
            $table->text('password');
            $table->text('country')->nullable();
            $table->text('city')->nullable();
            $table->text('state')->nullable();
            $table->text('address')->nullable();
            $table->text('mobile');
            $table->text('pincode')->nullable();
            $table->text('occu')->nullable();
            $table->text('occu')->nullable();
            $table->text('ms')->nullable();
            $table->text('mi')->nullable();
            $table->text('lw')->nullable();
            $table->text('mv')->nullable();
            $table->text('rom')->nullable();
            $table->text('int')->nullable();
            $table->text('am')->nullable();
            $table->text('img')->nullable();
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
