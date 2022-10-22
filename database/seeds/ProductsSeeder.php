<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'id_category' => 1,
                'name'        => 'Guiso de Pechuga de Pavita',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua',
                'price'       => 20.90,
                'quantity'    => 30
            ],
            [
                'id_category' => 1,
                'name'        => 'Langostinos Precocidos BELL\'S',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua',
                'price'       => 30.90,
                'quantity'    => 50
            ],
            [
                'id_category' => 1,
                'name'        => 'Panceta de Cerdo con Piel',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua',
                'price'       => 27.00,
                'quantity'    => 25
            ],
            [
                'id_category' => 2,
                'name'        => 'Queso Fresco BONLÉ',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua',
                'price'       => 10.50,
                'quantity'    => 44
            ],
            [
                'id_category' => 2,
                'name'        => 'Queso Edam BONLÉ',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua',
                'price'       => 60.00,
                'quantity'    => 3
            ],
            [
                'id_category' => 2,
                'name'        => 'Queso Crema PHILADELPHIA',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua',
                'price'       => 40.00,
                'quantity'    => 76
            ],

            [
                'id_category' => 3,
                'name'        => 'Laptop ASUS M1502IA-EJ026W 15',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua',
                'price'       => 2500.50,
                'quantity'    => 4
            ],
            [
                'id_category' => 3,
                'name'        => 'Mousepad Gamer DREIZT RGB Multicolor',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua',
                'price'       => 229.00,
                'quantity'    => 200
            ],
            [
                'id_category' => 3,
                'name'        => 'Kit HP Teclado Gamer + Mouse GK1100',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua',
                'price'       => 99.00,
                'quantity'    => 10
            ]
        ]);
        
    }
}
