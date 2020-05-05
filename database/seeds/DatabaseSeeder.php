<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(){
        // $this->call(UsersTableSeeder::class);
        \DB::table('users')->insert(array('username'=>'admin',  'password'=> \Hash::make('123'), 'nombres'=>'Administrador', 'grupo'=>'1', 'login'=>'1'));
        \DB::table('municipio')->insert(array('id'=>'1',  'municipio'=>'Potosi', 'poblacion'=>'5111', 'id_provincia'=>'1', 'id_usuario'=>'1'));
        \DB::table('enfermedad')->insert(array('id'=>'1',  'enfermedad'=>'BASE', 'id_usuario'=>'1'));
        


    }
}
