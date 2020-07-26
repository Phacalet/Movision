<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->smallInteger('civility')->default(3);
            $table->string('name');
            $table->string('firstname')->nullable();
            $table->date('birthday')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('photo_url')->nullable();
            $table->smallInteger('status')->default(0);
            $table->string('zone_1')->nullable();
            $table->string('zone_2')->nullable();
            $table->string('zone_3')->nullable();
            $table->string('password');
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
