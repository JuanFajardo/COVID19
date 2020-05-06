<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(){
        // $this->call(UsersTableSeeder::class);
        \DB::table('users')->insert(array('username'=>'admin',  'password'=> \Hash::make('123'), 'nombres'=>'Administrador', 'grupo'=>'1', 'login'=>'1'));

        \DB::table('enfermedad')->insert(array('id'=>'1',  'enfermedad'=>'BASE', 'id_usuario'=>'1'));

        \DB::table('estado')->insert(array('id'=>'1',  'estado'=>'SOSPECHOSO', 'clase'=>'alert alert-warning', 'id_usuario'=>'1'));
        \DB::table('estado')->insert(array('id'=>'2',  'estado'=>'POSITIVO', 'clase'=>'alert alert-danger', 'id_usuario'=>'1'));
        \DB::table('estado')->insert(array('id'=>'3',  'estado'=>'FALLECIDO', 'clase'=>'alert alert-dark', 'id_usuario'=>'1'));
        \DB::table('estado')->insert(array('id'=>'4',  'estado'=>'RECUPERADO', 'clase'=>'alert alert-success', 'id_usuario'=>'1'));
        \DB::table('estado')->insert(array('id'=>'5',  'estado'=>'CUARENTENA', 'clase'=>'alert alert-info', 'id_usuario'=>'1'));
        \DB::table('estado')->insert(array('id'=>'6',  'estado'=>'DESCARTADO', 'clase'=>'alert alert-light', 'id_usuario'=>'1'));

        \DB::table('municipio')->insert(array('id'=>'1',  'municipio'=>'Potosí', 'poblacion'=>'191302', 'id_provincia'=>'1', 'id_usuario'=>'1'));
        \DB::table('municipio')->insert(array('id'=>'2',  'municipio'=>'Belén de Urmiri', 'poblacion'=>'2759', 'id_provincia'=>'1', 'id_usuario'=>'1'));
        \DB::table('municipio')->insert(array('id'=>'3',  'municipio'=>'Tinguipaya', 'poblacion'=>'27200', 'id_provincia'=>'1', 'id_usuario'=>'1'));
        \DB::table('municipio')->insert(array('id'=>'4',  'municipio'=>'Yocalla', 'poblacion'=>'8979', 'id_provincia'=>'1', 'id_usuario'=>'1'));
        \DB::table('municipio')->insert(array('id'=>'5',  'municipio'=>'San Pablo de Lipez', 'poblacion'=>'3371', 'id_provincia'=>'2', 'id_usuario'=>'1'));
        \DB::table('municipio')->insert(array('id'=>'6',  'municipio'=>'Mojinete', 'poblacion'=>'1180', 'id_provincia'=>'2', 'id_usuario'=>'1'));
        \DB::table('municipio')->insert(array('id'=>'7',  'municipio'=>'San Antonio de Esmoruco', 'poblacion'=>'2284', 'id_provincia'=>'2', 'id_usuario'=>'1'));
        \DB::table('municipio')->insert(array('id'=>'8',  'municipio'=>'Tupiza', 'poblacion'=>'44814', 'id_provincia'=>'3', 'id_usuario'=>'1'));
        \DB::table('municipio')->insert(array('id'=>'9',  'municipio'=>'Atocha', 'poblacion'=>'11234', 'id_provincia'=>'3', 'id_usuario'=>'1'));
       \DB::table('municipio')->insert(array('id'=>'10',  'municipio'=>'Uncía ', 'poblacion'=>'22020', 'id_provincia'=>'4', 'id_usuario'=>'1'));
       \DB::table('municipio')->insert(array('id'=>'11',  'municipio'=>'Chayanta', 'poblacion'=>'16129', 'id_provincia'=>'4', 'id_usuario'=>'1'));
       \DB::table('municipio')->insert(array('id'=>'12',  'municipio'=>'Llallagua', 'poblacion'=>'41104', 'id_provincia'=>'4', 'id_usuario'=>'1'));
       \DB::table('municipio')->insert(array('id'=>'13',  'municipio'=>'Chuquiuta', 'poblacion'=>'8019', 'id_provincia'=>'4', 'id_usuario'=>'1'));
       \DB::table('municipio')->insert(array('id'=>'14',  'municipio'=>'Cotagaita', 'poblacion'=>'31801', 'id_provincia'=>'5', 'id_usuario'=>'1'));
       \DB::table('municipio')->insert(array('id'=>'15',  'municipio'=>'Vitichi', 'poblacion'=>'10646', 'id_provincia'=>'5', 'id_usuario'=>'1'));
       \DB::table('municipio')->insert(array('id'=>'16',  'municipio'=>'Colcha K', 'poblacion'=>'12997', 'id_provincia'=>'6', 'id_usuario'=>'1'));
       \DB::table('municipio')->insert(array('id'=>'17',  'municipio'=>'San Pedro de Quemes', 'poblacion'=>'1060', 'id_provincia'=>'6', 'id_usuario'=>'1'));
       \DB::table('municipio')->insert(array('id'=>'18',  'municipio'=>'Villazón', 'poblacion'=>'44906', 'id_provincia'=>'7', 'id_usuario'=>'1'));
       \DB::table('municipio')->insert(array('id'=>'19',  'municipio'=>'Puna  ', 'poblacion'=>'21917', 'id_provincia'=>'8', 'id_usuario'=>'1'));
       \DB::table('municipio')->insert(array('id'=>'20',  'municipio'=>'Caiza D', 'poblacion'=>'12067', 'id_provincia'=>'8', 'id_usuario'=>'1'));
       \DB::table('municipio')->insert(array('id'=>'21',  'municipio'=>'Ckochas', 'poblacion'=>'15812', 'id_provincia'=>'8', 'id_usuario'=>'1'));
       \DB::table('municipio')->insert(array('id'=>'22',  'municipio'=>'San Agustín', 'poblacion'=>'1684', 'id_provincia'=>'9', 'id_usuario'=>'1'));
       \DB::table('municipio')->insert(array('id'=>'23',  'municipio'=>'Llica', 'poblacion'=>'4150', 'id_provincia'=>'10', 'id_usuario'=>'1'));
       \DB::table('municipio')->insert(array('id'=>'24',  'municipio'=>'Tahua', 'poblacion'=>'1700', 'id_provincia'=>'10', 'id_usuario'=>'1'));
       \DB::table('municipio')->insert(array('id'=>'25',  'municipio'=>'Betanzos', 'poblacion'=>'33922', 'id_provincia'=>'11', 'id_usuario'=>'1'));
       \DB::table('municipio')->insert(array('id'=>'26',  'municipio'=>'Chaquí', 'poblacion'=>'9910', 'id_provincia'=>'11', 'id_usuario'=>'1'));
       \DB::table('municipio')->insert(array('id'=>'27',  'municipio'=>'Tacobamba', 'poblacion'=>'11835', 'id_provincia'=>'11', 'id_usuario'=>'1'));
       \DB::table('municipio')->insert(array('id'=>'28',  'municipio'=>'Colquechaca', 'poblacion'=>'35199', 'id_provincia'=>'12', 'id_usuario'=>'1'));
       \DB::table('municipio')->insert(array('id'=>'29',  'municipio'=>'Ocurí', 'poblacion'=>'16118', 'id_provincia'=>'12', 'id_usuario'=>'1'));
       \DB::table('municipio')->insert(array('id'=>'30',  'municipio'=>'Pocoata', 'poblacion'=>'26330', 'id_provincia'=>'12', 'id_usuario'=>'1'));
       \DB::table('municipio')->insert(array('id'=>'31',  'municipio'=>'Ravelo', 'poblacion'=>'20789', 'id_provincia'=>'12', 'id_usuario'=>'1'));
       \DB::table('municipio')->insert(array('id'=>'32',  'municipio'=>'San Pedro de Buena Vista', 'poblacion'=>'30012', 'id_provincia'=>'13', 'id_usuario'=>'1'));
       \DB::table('municipio')->insert(array('id'=>'33',  'municipio'=>'Toro Toro', 'poblacion'=>'10870', 'id_provincia'=>'13', 'id_usuario'=>'1'));
       \DB::table('municipio')->insert(array('id'=>'34',  'municipio'=>'Arampampa', 'poblacion'=>'4170', 'id_provincia'=>'14', 'id_usuario'=>'1'));
       \DB::table('municipio')->insert(array('id'=>'35',  'municipio'=>'Acasio', 'poblacion'=>'6161', 'id_provincia'=>'14', 'id_usuario'=>'1'));
       \DB::table('municipio')->insert(array('id'=>'36',  'municipio'=>'Uyuni ', 'poblacion'=>'29672', 'id_provincia'=>'15', 'id_usuario'=>'1'));
       \DB::table('municipio')->insert(array('id'=>'37',  'municipio'=>'Porco ', 'poblacion'=>'10866', 'id_provincia'=>'15', 'id_usuario'=>'1'));
       \DB::table('municipio')->insert(array('id'=>'38',  'municipio'=>'Tomave', 'poblacion'=>'14789', 'id_provincia'=>'15', 'id_usuario'=>'1'));
       \DB::table('municipio')->insert(array('id'=>'39',  'municipio'=>'Sacaca', 'poblacion'=>'19611', 'id_provincia'=>'16', 'id_usuario'=>'1'));
       \DB::table('municipio')->insert(array('id'=>'40',  'municipio'=>'Caripuyo', 'poblacion'=>'8704', 'id_provincia'=>'16', 'id_usuario'=>'1'));



    }
}
