<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatalogDownloadLinksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catalog_download_links')->insert([
            [
                'catalog_download_id' => 1,
                'link_0' => 'https://w2me.ru/download/1',
                'link_1' => 'https://w2me.ru/download/1',
                'link_2'=> 'https://w2me.ru/download/1'
            ],
            [
                'catalog_download_id' => 2,
                'link_0' => 'https://w2me.ru/download/2',
                'link_1' => 'https://w2me.ru/download/2',
                'link_2'=> 'https://w2me.ru/download/2'
            ],
            [
                'catalog_download_id' => 3,
                'link_0' => 'https://w2me.ru/download/3',
                'link_1' => 'https://w2me.ru/download/3',
                'link_2'=> 'https://w2me.ru/download/3'
            ],
            [
                'catalog_download_id' => 4,
                'link_0' => 'https://w2me.ru/download/4',
                'link_1' => 'https://w2me.ru/download/4',
                'link_2'=> 'https://w2me.ru/download/4'
            ],
            [
                'catalog_download_id' => 5,
                'link_0' => 'https://w2me.ru/download/5',
                'link_1' => 'https://w2me.ru/download/5',
                'link_2'=> 'https://w2me.ru/download/5'
            ]
        ]);
    }
}
