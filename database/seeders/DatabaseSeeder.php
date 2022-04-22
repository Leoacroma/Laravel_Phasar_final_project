<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Genres;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Genres::create([
            'name'=>'Clothes',
            'desc'=>'Clothes',
        ]);
        Genres::create([
            'name'=>'Electronic',
            'desc'=>'Electronic',
        ]);
        Genres::create([
            'name'=>'Toys',
            'desc'=>'Toys',
        ]);
        Genres::create([
            'name'=>'Equipments',
            'desc'=>'Equipments',
        ]);
        Genres::create([
            'name'=>'School Equipments',
            'desc'=>'School Equipments',
        ]);

        // \App\Models\User::factory(10)->create();
    }
}
