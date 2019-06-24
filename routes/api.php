<?php

use Illuminate\Http\Request;
use App\Empleado;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//Obtener todos los empleados
Route::get('empleados', function (){
  $empleados = Empleado::get();
  return $empleados;
});

//Obtener todos los empleados
Route::get('empleados/{id}', function ($id){
  $empleados = Empleado::findOrfail($id);
  return $empleados;
});

//Crear empleado
Route::post('empleados', function (Request $request){
  $request->validate([
    'nombres' => 'required|max:50',
    'apellidos' => 'required|max:50',
    'nit' => 'required',
    'email' => 'required|max:50|email|unique:empleados',
    'lugar_nacimiento' => 'required|max:50',
    'sexo' => 'required|max:50',
    'estado_civil' => 'required|max:50',
    'telefono' => 'required|numeric'
  ]);

  $empleado = new Empleado;
  $empleado->nombres = $request->input('nombres');
  $empleado->apellidos = $request->input('apellidos');
  $empleado->nit = $request->input('nit');
  $empleado->email = $request->input('email');
  $empleado->lugar_nacimiento = $request->input('lugar_nacimiento');
  $empleado->sexo = $request->input('sexo');
  $empleado->estado_civil = $request->input('estado_civil');
  $empleado->telefono = $request->input('telefono');
  $empleado->save();
  return $empleado->nombres . ' Creado';
});

//Actualizar empleado
Route::put('empleados/{id}', function (Request $request, $id){
  $request->validate([
    'nombres' => 'required|max:50',
    'apellidos' => 'required|max:50',
    'nit' => 'required',
    'email' => 'required|max:50|email|unique:empleados,email,' . $id,
    'lugar_nacimiento' => 'required|max:50',
    'sexo' => 'required|max:50',
    'estado_civil' => 'required|max:50',
    'telefono' => 'required|numeric'
  ]);

  $empleado = Empleado::findOrfail($id);
  $empleado->nombres = $request->input('nombres');
  $empleado->apellidos = $request->input('apellidos');
  $empleado->nit = $request->input('nit');
  $empleado->email = $request->input('email');
  $empleado->lugar_nacimiento = $request->input('lugar_nacimiento');
  $empleado->sexo = $request->input('sexo');
  $empleado->estado_civil = $request->input('estado_civil');
  $empleado->telefono = $request->input('telefono');
  $empleado->save();
  return $empleado->nombres . ' Actualizado';
});

//Eliminar empleado
Route::delete('empleados/{id}', function ($id){

  $empleado = Empleado::findOrfail($id);
  $nombre = $empleado->nombres;
  $empleado->delete();
  return $nombre . ' Eliminado';
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
