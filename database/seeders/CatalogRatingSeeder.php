<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatalogRatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //id	bestRating	worstRating	ratingValue	ratingCount	reviewCount	created_at	updated_at
        DB::table('catalog_rating')->insert([
            [
                'id' => 1,
                'catalog_id' => 1,
                'bestRating' => 0,
                'worstRating' => 0,
                'ratingValue' => 0,
                'ratingCount' => 0,
                'reviewCount' => 0,
            ],
            [
                'id' => 2,
                'catalog_id' => 2,
                'bestRating' => 0,
                'worstRating' => 0,
                'ratingValue' => 0,
                'ratingCount' => 0,
                'reviewCount' => 0,
            ],
            [
                'id' => 3,
                'catalog_id' => 3,
                'bestRating' => 0,
                'worstRating' => 0,
                'ratingValue' => 0,
                'ratingCount' => 0,
                'reviewCount' => 0,
            ],
            [
                'id' => 4,
                'catalog_id' => 4,
                'bestRating' => 0,
                'worstRating' => 0,
                'ratingValue' => 0,
                'ratingCount' => 0,
                'reviewCount' => 0,
            ],
            [
                'id' => 5,
                'catalog_id' => 5,
                'bestRating' => 0,
                'worstRating' => 0,
                'ratingValue' => 0,
                'ratingCount' => 0,
                'reviewCount' => 0,
            ],
        ]);
    }
}
