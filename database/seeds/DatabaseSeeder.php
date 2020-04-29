<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(){
        // $this->call(UsersTableSeeder::class);
        \DB::table('users')->insert(array('username'=>'potosi_administrador',  'password'=> \Hash::make('Potosi2020_'), 'nombres'=>'Administrador', 'grupo'=>'1', 'login'=>'1'));

    }
}
