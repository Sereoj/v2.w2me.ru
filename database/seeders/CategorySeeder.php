<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $values = ['windows', 'mac', 'linux', 'other'];

        foreach ($values as $item)
        {
            \DB::table('categories')->insert(
                ['name' => $item]
            );
        }
    }
}
