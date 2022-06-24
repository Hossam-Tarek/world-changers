<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!Setting::where('slug', 'logo')->exists()) {
            Setting::create([
                'slug' => 'logo',
                'name' => 'Logo',
                'sort' => '1',
                'type' => 'image',
            ]);
        }
    }
}
