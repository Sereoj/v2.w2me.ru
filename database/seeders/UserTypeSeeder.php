<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $values = ['free', 'premium'];

        foreach ($values as $item)
        {
            \DB::table('user_type')->insert(
                ['type' => $item]
            );
        }
    }
}
