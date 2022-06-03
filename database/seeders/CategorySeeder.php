<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
                'name' => 'Stomatologie Generala',
                'slug' => 'stomatologie-generala',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Stomatologie Copii',
                'slug' => 'stomatologie-copii',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
    }
}
