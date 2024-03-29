<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(LanguageSeeder::class);
        $this->call(SuperAdminSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(HighSchoolSeeder::class);
        $this->call(PageSeeder::class);
        $this->call(StateSeeder::class);
        $this->call(CitySeeder::class);
    }
}
