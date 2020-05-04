<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(){
        // $this->call(UsersTableSeeder::class);
        \DB::table('users')->insert(array('username'=>'admin',  'password'=> \Hash::make('123'), 'nombres'=>'Administrador', 'grupo'=>'1', 'login'=>'1'));

    }
}
