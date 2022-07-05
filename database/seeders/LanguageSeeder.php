<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Language::insert([
            ["code" => "ar", "name" => "Arabic", "direction" => "rtl", "local_name" => "العربية"],
            ["code" => "en", "name" => "English", "direction" => "ltr", "local_name" => "English"],
            ["code" => "fr", "name" => "French", "direction" => "ltr", "local_name" => "Français"],
            ["code" => "it", "name" => "Italian", "direction" => "ltr", "local_name" => "Italiano"],
            ["code" => "es", "name" => "Spanish", "direction" => "ltr", "local_name" => "Español"],
            ["code" => "de", "name" => "German", "direction" => "ltr", "local_name" => "Deutsch"],
        ]);
    }
}
