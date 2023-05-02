<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $cities = array(
            array('name' => 'Санкт-Петербург', 'slug' => Str::slug('Санкт-Петербург')),
            array('name' => 'Чита', 'slug' => Str::slug('Чита')),
            array('name' => 'Екатеринбург', 'slug' => Str::slug('Екатеринбург')),
            array('name' => 'Челябинск', 'slug' => Str::slug('Челябинск')),
            array('name' => 'Москва', 'slug' => Str::slug('Москва'))
        );

        // Uncomment the below to run the seeder
        DB::table('cities')->insert($cities);
    }
}
