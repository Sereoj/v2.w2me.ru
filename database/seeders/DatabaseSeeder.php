<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);

        $this->call(UserRoleSeeder::class);
        $this->call(UserTypeSeeder::class);

        $this->call(CategorySeeder::class);
        $this->call(CatalogSeeder::class);

        $this->call(CatalogDownloadSeeder::class);
        $this->call(CatalogDownloadLinksSeeder::class);

        $this->call(CatalogRatingSeeder::class);
        $this->call(LicenseTypeSeeder::class);
    }
}
