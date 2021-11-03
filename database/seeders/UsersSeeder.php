<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //id
        //name
        //email
        //email_verified_at
        //password
        //user_type_id
        //user_role_id
        //favorite_themes
        //install_themes
        //load_themes
        //api_token
        //remember_token
        //created_at
        //updated_at

        DB::table('users')->insert(
        [
            'id' => 1,
            'name' => 'admin',
            'email' => 'admin@w2me.ru',
            'email_verified_at' => null,
            'password' => Hash::make('admin'),
            'favorite_themes' => serialize([1, 3, 5]),
            'install_themes' => serialize([1,5]),
            'lang' => 'ru',
            'api_token' => '',
            'remember_token' => '',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today(),
        ]
        );
    }
}
