<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
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
                'id' => 1,
                'name' => 'Carnes'
            ],
            [
                'id' => 2,
                'name' => 'Lacteos'
            ],
            [
                'id' => 3,
                'name' => 'Tecnologia'
            ]
        ]);
    }
}
