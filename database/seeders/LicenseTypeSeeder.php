<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LicenseTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $values = ['free', 'pay'];

        foreach ($values as $item)
        {
            \DB::table('license_type')->insert(
                ['type' => $item]
            );
        }
    }
}
