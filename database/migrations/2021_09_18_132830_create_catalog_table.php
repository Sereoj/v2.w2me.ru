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
        Schema::create('catalog', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->longText('description')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('preview')->nullable();
            $table->longText('images')->nullable();
            $table->foreignId('category_id')->constrained('categories')->cascadeOnDelete();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete(); // Кто загрузил
        });

        Schema::create('license_type', function (Blueprint $table) {
            $table->id();
            $table->foreignId('catalog_id')->constrained('catalog')->cascadeOnDelete();
            $table->string('cost')->nullable();
            $table->enum('currency', ['RUB', 'USD', 'EUR'])->nullable();
            $table->enum('type', ['free', 'pay']);
        });

        Schema::create('catalog_download', function (Blueprint $table) {
            $table->id();
            $table->foreignId('catalog_id')->constrained('catalog')->cascadeOnDelete();
            $table->string('size')->nullable();
            $table->integer('count_download')->default('0');
        });

        Schema::create('catalog_rating', function (Blueprint $table) {
            $table->id();
            $table->foreignId('catalog_id')->constrained('catalog')->cascadeOnDelete();
            $table->string('bestRating');
            $table->string('worstRating');
            $table->string('ratingValue');
            $table->string('ratingCount');
            $table->string('reviewCount');
        });

        Schema::create('catalog_download_links', function (Blueprint $table) {
            $table->id();
            $table->foreignId('catalog_download_id')->constrained('catalog_download')->cascadeOnDelete();
            $table->string('link_0')->nullable();
            $table->string('link_1')->nullable();
            $table->string('link_2')->nullable();
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
        Schema::dropIfExists('catalog');
        Schema::dropIfExists('catalog_download');
        Schema::dropIfExists('catalog_rating');
        Schema::dropIfExists('catalog_download_links');
    }
}
