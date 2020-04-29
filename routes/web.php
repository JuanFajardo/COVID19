<?php

Route::get('/','MapaController@Pagina');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Laboratorio', 'LaboratorioController@index');
Route::post('/GuardaLaboratorio', 'LaboratorioController@GuardaLaboratorio');
Route::get('/VerLaboratorio/{id}', 'LaboratorioController@VerLaboratorio');
Route::post('/ActualizaLaboratorio', 'LaboratorioController@ActualizaLaboratorio');


Route::get('/Tipo', 'TipoController@index');
Route::post('/GuardaTipo', 'TipoController@GuardaTipo');
Route::get('/BuscarTipo/{id}', 'TipoController@BuscarTipo');
Route::post('/ActualizaTipo', 'TipoController@ActualizaTipo');
Route::post('/EliminarTipo', 'TipoController@EliminarTipo');

Route::get('/Puntos', 'PuntosController@index');
Route::post('/GuardaPunto', 'PuntosController@GuardaPunto');
Route::get('/BuscarPunto/{id}', 'PuntosController@BuscarPunto');
Route::post('/ActualizaPunto', 'PuntosController@ActualizaPunto');
Route::post('/EliminarPunto', 'PuntosController@EliminarPunto');

Route::get('/Fumigacion', 'FumigacionController@index');
Route::post('/GuardaFumigacion', 'FumigacionController@GuardaFumigacion');
Route::get('/BuscarFumigacion/{id}', 'FumigacionController@BuscarFumigacion');
Route::post('/ActualizaFumigacion', 'FumigacionController@ActualizaFumigacion');
Route::post('/EliminarFumigacion', 'FumigacionController@EliminarFumigacion');

Route::get('/Estado', 'EstadoController@index');
Route::post('/GuardaEstado', 'EstadoController@GuardaEstado');
Route::get('/BuscarEstado/{id}', 'EstadoController@BuscarEstado');
Route::post('/ActualizaEstado', 'EstadoController@ActualizaEstado');
Route::post('/EliminarEstado', 'EstadoController@EliminarEstado');

Route::get('/Paciente', 'PacienteController@index');
Route::post('/GuardaPaciente', 'PacienteController@GuardaPaciente');
Route::get('/BuscarPaciente/{id}', 'PacienteController@BuscarPaciente');
Route::post('/ActualizaPaciente', 'PacienteController@ActualizaPaciente');
Route::post('/EliminarPaciente', 'PacienteController@EliminarPaciente');
Route::post('/NuevaMuestra', 'PacienteController@NuevaMuestra');
Route::post('/NuevoHistorial', 'PacienteController@NuevoHistorial');
Route::get('/VerHistorial/{id}', 'PacienteController@VerHistorial');
Route::get('/BuscarPacienteFamilia/{id}', 'PacienteController@BuscarPacienteFamilia');
Route::get('/BuscarPacienteEstado/{id}', 'PacienteController@BuscarPacienteEstado');

Route::get('/Enfermedad', 'EnfermedadController@index');
Route::post('/GuardaEnfermedad', 'EnfermedadController@GuardaEnfermedad');
Route::get('/BuscarEnfermedad/{id}', 'EnfermedadController@BuscarEnfermedad');
Route::post('/ActualizaEnfermedad', 'EnfermedadController@ActualizaEnfermedad');
Route::post('/EliminarEnfermedad', 'EnfermedadController@EliminarEnfermedad');

Route::get('/Arbol', 'PacienteController@Arbol');
Route::get('/BuscarArbol/{id}', 'PacienteController@BuscarArbol');
Route::get('/BuscarArbolPaciente/{id}', 'PacienteController@BuscarArbolPaciente');
Route::post('/AsignarArbol', 'PacienteController@AsignarArbol');

Route::get('/Municipio', 'MunicipioController@index');
Route::post('/GuardaMunicipio', 'MunicipioController@GuardaMunicipio');
Route::get('/BuscarMunicipio/{id}', 'MunicipioController@BuscarMunicipio');
Route::post('/ActualizaMunicipio', 'MunicipioController@ActualizaMunicipio');
Route::post('/EliminarMunicipio', 'MunicipioController@EliminarMunicipios');
Route::get('/BuscarDatosGrafico/{id}', 'MunicipioController@BuscarDatosGrafico');


Route::get('/CargarMarcadores/{id}', 'MapaController@CargarMarcadores');

