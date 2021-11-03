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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('favorite_themes')->nullable();
            $table->string('install_themes')->nullable();
            $table->string('lang')->nullable();
            $table->string('api_token')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('user_role', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->enum('role', [
                'user',
                'moderator',
                'administrator',
            ]);
        });

        Schema::create('user_type', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->enum('type', [
                'free',
                'pay',
                'gift',
            ]);
            $table->date('gift_time')->nullable();
            $table->string('cost')->nullable();
        });

        Schema::create('user_photo', function (Blueprint $table) {
           $table->id();
           $table->foreignId('user_id')->constrained('users');
           $table->string('path')->nullable();
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
        Schema::dropIfExists('user_role');
        Schema::dropIfExists('user_type');
        Schema::dropIfExists('user_photo');
    }
}
