<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogTable extends Migration
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
         * Name: Windows
         */
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });
        /*
         * id: 1
         * type: Free
         */
        Schema::create('license_type', function (Blueprint $table) {
            $table->id();
            $table->string('type');
        });

        /*
         * id: 1
         * size: 7675 mb
         * links: { "Github": link, }
         * count_download: 1000
         * timestamps - когда загрузили, когда обновили.
         */
        Schema::create('catalog_download', function (Blueprint $table) {
            $table->id();
            $table->string('size');
            $table->json('links')->nullable();
            $table->integer('count_download')->default('0');
            $table->timestamps();
        });

        Schema::create('catalog_rating', function (Blueprint $table) {
            $table->id();
            $table->string('bestRating');
            $table->string('worstRating');
            $table->string('ratingValue');
            $table->string('ratingCount');
            $table->string('reviewCount');
            $table->timestamps();
        });

        Schema::create('catalog', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('preview')->nullable();
            $table->json('images')->nullable();

            $table->foreignId('category_id')->constrained('categories')->cascadeOnDelete();
            $table->foreignId('license_type_id')->constrained('license_type')->cascadeOnDelete();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete(); // Кто загрузил
            $table->foreignId('catalog_download_id')->constrained('catalog_download')->cascadeOnDelete();
            $table->foreignId('catalog_rating_id')->constrained('catalog_rating')->cascadeOnDelete();
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
        Schema::dropIfExists('categories');
        Schema::dropIfExists('license_type');
        Schema::dropIfExists('catalog_download');
        Schema::dropIfExists('catalog_rating');
        Schema::dropIfExists('catalog');
    }
}
