<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name'          => 'Perkuliahan',
                'slug'          => 'perkuliahan',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            [
                'name'          => 'Perkodingan',
                'slug'          => 'perkodingan',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            [
                'name'          => 'Suggestions',
                'slug'          => 'suggestions',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            [
                'name'          => 'Urgent Banget',
                'slug'          => 'uergent-banget',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
        ]);
    }
}
