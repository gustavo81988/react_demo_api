<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Gustavo Ramirez',
            'email' => 'gustavo81988@gmail.com',
            'password' => Hash::make('password'),
            'phone' => '+51926623666',
            'direction' => 'Av Alameda Sur Calle Cabo Blanco MZ H6 LT22',
            'zip_code' => '15067'
        ]);
        Artisan::call('passport:install');
    }
}
