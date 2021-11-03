<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatalogDownloadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //id	size	links	count_download created_at	updated_at
        DB::table('catalog_download')->insert(
            [
                [
                   'id' => 1,
                   'catalog_id' => 1,
                   'size' => 0,
                   'count_download' => 100,
                ],
                [
                    'id' => 2,
                    'catalog_id' => 2,
                    'size' => 0,
                    'count_download' => 100,
                ],
                [
                    'id' => 3,
                    'catalog_id' => 3,
                    'size' => 0,
                    'count_download' => 100,
                ],
                [
                    'id' => 4,
                    'catalog_id' => 4,
                    'size' => 0,
                    'count_download' => 100,
                ],
                [
                    'id' => 5,
                    'catalog_id' => 5,
                    'size' => 0,
                    'count_download' => 100,
                ],

            ]
        );
    }
}
