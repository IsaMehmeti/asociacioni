<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Isa Mehmeti',
            'email' => 'isamehmeti21@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        DB::table('users')->insert([
            'name' => 'Parim Baftiu',
            'email' => 'p.baftiu@tagdigitals.com',
            'password' => Hash::make('tagdigitals'),
        ]);
        DB::table('users')->insert([
            'name' => 'Egzon Hajdini',
            'email' => 'ehajdinnii@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
