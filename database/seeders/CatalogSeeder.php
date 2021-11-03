<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //id	name	description	meta_title	meta_description	preview	images	category_id	license_type_id	user_id	catalog_download_id	catalog_rating_id
        DB::table('catalog')->insert(
            [
                [
                    'id' => 1,
                    'name' => 'Abstract Cloth',
                    'description' => 'Данный текст используется для шаблона и не несёт важную ключевую информацию. Читая не информативный текст в пустую потратите время.',
                    'meta_title' => 'Abstract Cloth | Wallpaper for Windows 10',
                    'meta_description' => 'Abstract Cloth - Тема',
                    'preview' => 'https://raw.githubusercontent.com/t1m0thyj/WDD-website/master/themes/previews/Abstract_Cloth_day.jpg',
                    'images' => serialize([
                        'sunrise' => [],
                        'day' => [
                            0 => 'https://raw.githubusercontent.com/t1m0thyj/WDD-website/master/themes/previews/Abstract_Cloth_day.jpg'
                        ],
                        'sunset' => [],
                        'night' => [
                            1 => 'https://raw.githubusercontent.com/t1m0thyj/WDD-website/master/themes/previews/Abstract_Cloth_night.jpg'
                        ],
                    ]),
                    'category_id' => 2,
                    'user_id' => 1,
                ],
                [
                    'id' => 2,
                    'name' => 'Apple Ocean',
                    'description' => 'Данный текст используется для шаблона и не несёт важную ключевую информацию. Читая не информативный текст в пустую потратите время.',
                    'meta_title' => 'Apple Ocean | Wallpaper for Windows 10',
                    'meta_description' => 'Apple Ocean - Тема',
                    'preview' => 'https://raw.githubusercontent.com/t1m0thyj/WDD-website/master/themes/previews/Apple_Ocean_day.jpg',
                    'images' => serialize([
                        'sunrise' => [
                            0 => 'https://raw.githubusercontent.com/t1m0thyj/WDD-website/master/themes/previews/Apple_Ocean_sunrise.jpg',
                        ],
                        'day' => [
                            1 => 'https://raw.githubusercontent.com/t1m0thyj/WDD-website/master/themes/previews/Apple_Ocean_day.jpg'
                        ],
                        'sunset' => [
                            2 => 'https://raw.githubusercontent.com/t1m0thyj/WDD-website/master/themes/previews/Apple_Ocean_sunset.jpg'
                        ],
                        'night' => [
                            3 => 'https://raw.githubusercontent.com/t1m0thyj/WDD-website/master/themes/previews/Apple_Ocean_night.jpg'
                        ],
                    ]),
                    'category_id' => 2,
                    'user_id' => 1,
                ],
                [
                    'id' => 3,
                    'name' => 'Automation Hyper Turning Left',
                    'description' => 'Данный текст используется для шаблона и не несёт важную ключевую информацию. Читая не информативный текст в пустую потратите время.',
                    'meta_title' => 'Automation Hyper Turning Left | Wallpaper for Windows 10',
                    'meta_description' => 'Automation Hyper Turning Left - Тема',
                    'preview' => 'https://raw.githubusercontent.com/t1m0thyj/WDD-website/master/themes/previews/Automation_Hyper_Turning_Left_day.jpg',
                    'images' => serialize([
                        'sunrise' => [
                            0 => 'https://raw.githubusercontent.com/t1m0thyj/WDD-website/master/themes/previews/Automation_Hyper_Turning_Left_sunrise.jpg',
                        ],
                        'day' => [
                            1 => 'https://raw.githubusercontent.com/t1m0thyj/WDD-website/master/themes/previews/Automation_Hyper_Turning_Left_day.jpg'
                        ],
                        'sunset' => [
                            2 => 'https://raw.githubusercontent.com/t1m0thyj/WDD-website/master/themes/previews/Automation_Hyper_Turning_Left_sunset.jpg'
                        ],
                        'night' => [
                            3 => 'https://raw.githubusercontent.com/t1m0thyj/WDD-website/master/themes/previews/Automation_Hyper_Turning_Left_night.jpg'
                        ],
                    ]),
                    'category_id' => 3,
                    'user_id' => 1,
                ],
                [
                    'id' => 4,
                    'name' => 'Big Sur Abstract',
                    'description' => 'Данный текст используется для шаблона и не несёт важную ключевую информацию. Читая не информативный текст в пустую потратите время.',
                    'meta_title' => 'Big Sur Abstract | Wallpaper for Windows 10',
                    'meta_description' => 'Big Sur Abstract - Тема',
                    'preview' => 'https://raw.githubusercontent.com/t1m0thyj/WDD-website/master/themes/previews/Big_Sur_Abstract_day.jpg',
                    'images' => serialize([
                        'sunrise' => [],
                        'day' => [
                            0 => 'https://raw.githubusercontent.com/t1m0thyj/WDD-website/master/themes/previews/Big_Sur_Abstract_day.jpg'
                        ],
                        'sunset' => [],
                        'night' => [
                            1 => 'https://raw.githubusercontent.com/t1m0thyj/WDD-website/master/themes/previews/Big_Sur_Abstract_night.jpg'
                        ],
                    ]),
                    'category_id' => 2,
                    'user_id' => 1,
                ],
                [
                    'id' => 5,
                    'name' => 'Big Sur',
                    'description' => 'Данный текст используется для шаблона и не несёт важную ключевую информацию. Читая не информативный текст в пустую потратите время.',
                    'meta_title' => 'Big Sur | Wallpaper for Windows 10',
                    'meta_description' => 'Big Sur - Тема',
                    'preview' => 'https://raw.githubusercontent.com/t1m0thyj/WDD-website/master/themes/previews/Big_Sur_day.jpg',
                    'images' => serialize([
                        'sunrise' => [
                            0 => 'https://raw.githubusercontent.com/t1m0thyj/WDD-website/master/themes/previews/Big_Sur_sunrise.jpg',
                        ],
                        'day' => [
                            1 => 'https://raw.githubusercontent.com/t1m0thyj/WDD-website/master/themes/previews/Big_Sur_day.jpg'
                        ],
                        'sunset' => [
                            2 => 'https://raw.githubusercontent.com/t1m0thyj/WDD-website/master/themes/previews/Big_Sur_sunset.jpg'
                        ],
                        'night' => [
                            3 => 'https://raw.githubusercontent.com/t1m0thyj/WDD-website/master/themes/previews/Big_Sur_night.jpg'
                        ],
                    ]),
                    'category_id' => 2,
                    'user_id' => 1,
                ],
            ]
        );
    }
}
