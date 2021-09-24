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
        /*
         * id: 1
         * Name: Admin
         */
        Schema::create('user_role', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('User');
        });

        /*
         * id: 1
         * type: Free
         */
        Schema::create('user_type', function (Blueprint $table) {
            $table->id();
            $table->string('type')->default('Free');
        });

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->foreignId('user_type_id')->constrained('user_type');
            $table->foreignId('user_role_id')->constrained('user_role');
            $table->json('favorite_themes')->nullable();
            $table->json('install_themes')->nullable();
            $table->json('load_themes')->nullable();
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
        Schema::dropIfExists('user_role');
        Schema::dropIfExists('user_type');
        Schema::dropIfExists('users');
    }
}
