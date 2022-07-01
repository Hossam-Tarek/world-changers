<?php

namespace Database\Seeders;

use App\Models\Year;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HighSchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('years')->insert([
            ['name' => 'الصف الاول الثانوي'],
            ['name' => 'الصف الثاني الثانوي'],
            ['name' => 'الصف الثالث الثانوي'],
        ]);

        DB::table('departments')->insert([
            ['year_id' => 1, 'name' => 'عام'],
            ['year_id' => 2, 'name' => 'علمي'],
            ['year_id' => 2, 'name' => 'ادبي'],
            ['year_id' => 3, 'name' => 'علمي علوم'],
            ['year_id' => 3, 'name' => 'علمي رياضة'],
            ['year_id' => 3, 'name' => 'ادبي'],
        ]);
    }
}
