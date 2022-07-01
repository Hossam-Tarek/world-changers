<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!Page::where('slug', 'about')->exists()) {
            Page::create([
                'slug' => 'about',
                'title' => 'Title',
                'body' => 'Body',
            ]);
        }

        if (!Page::where('slug', 'contact')->exists()) {
            Page::firstOrCreate([
                'slug' => 'contact',
                'title' => 'Title',
                'body' => 'Body',
            ]);
        }

        if (!Page::where('slug', 'terms-conditions')->exists()) {
            Page::firstOrCreate([
                'slug' => 'terms-conditions',
                'title' => 'Title',
                'body' => 'Body',
            ]);
        }

        if (!Page::where('slug', 'privacy-policy')->exists()) {
            Page::firstOrCreate([
                'slug' => 'privacy-policy',
                'title' => 'Title',
                'body' => 'Body',
            ]);
        }
    }
}
