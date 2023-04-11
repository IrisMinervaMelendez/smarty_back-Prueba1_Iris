<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\Centro_educativoController;
use App\Http\Controllers\ContenidoController;
use App\Http\Controllers\Correo_alumnoController;
use App\Http\Controllers\Correo_centro_educativoController;
use App\Http\Controllers\CuestionarioController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\DireccionController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\Historia_inicio_sesionController;
use App\Http\Controllers\HistorialController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


////RUTAS PARA LA TABLA ALUMNO


Route::get('alumno/{alumno}', [AlumnoController::class, 'show']);
Route::get('alumno/{correo_alumno}', [Correo_alumnoController::class, 'show']);
Route::get('alumno/{centro_educativo}', [Centro_educativoController::class, 'show']);
Route::get('alumno/{contenido}', [ContenidoController::class, 'show']);
Route::get('alumno/{correo_centro_ed}', [Correo_centro_edController::class, 'show']);
Route::get('alumno/{cuestionario}', [CuestionarioController::class, 'show']);
Route::get('alumno/{departamento}', [DepartamentoController::class, 'show']);
Route::get('alumno/{direccion}', [DireccionController::class, 'show']);
Route::get('alumno/{historia_inicio_sesion}', [Historia_inicio_sesionController::class, 'show']);
Route::get('alumno/{historial}', [HistorialController::class, 'show']);
Route::get('alumno/{materia}', [MateriaController::class, 'show']);
Route::get('alumno/{municipio}', [MunicipioController::class, 'show']);












Route::get('alumno/{id_alumno}', function ($id_alumno) {
    if($id_alumno==null){
        return "Ingrese un ID de alumno valido";
    }
    return "ID del alumno $id_alumno";
});



Route::get('alumno/{nie}', function ($nie) {
    return "NIE del alumno $nie";
});

Route::get('alumno/{nombre_completo}', function ($nombre, $apellido) {
    return "Nombre completo del alumno $nombre . $apellido";
});

Route::get('alumno/{nivel}', function ($nivel) {
    return "Nivel educativo del alumno $nivel";
});

Route::get('alumno/{numero_grado}', function ($numero_grado) {
    return "Grado del alumno $numero_grado";
});

Route::get('alumno/{fecha_nacimiento}', function ($fecha_nacimiento) {
    return "Fecha de nacimiento del alumno $fecha_nacimiento";
});

Route::get('alumno/{genero}', function ($genero) {
    return "Genero del alumno $genero";
});

Route::get('alumno/{fecha_registro}', function ($fecha_registro) {
    return "Fecha de registro de datos del alumno $fecha_registro";
});

Route::get('alumno/{fecha_actualizacion}', function ($fecha_actualizacion) {
    return "Fecha de actualizacion de datos del alumno $fecha_actualizacion";
});

Route::get('alumno/{estado}', function ($estado) {
    return "Estado del alumno $estado";
});

Route::get('alumno/{foto}', function ($foto) {
    return "Alumno $foto";
});



///RUTAS PARA EL CORREO DEL ALUMNO

Route::get('correo_alumno/{id_correo_alumno}', function ($id_correo_alumno) {
    if($id_correo_alumno==null){
        return "Ingrese un ID de correo valido";
    }
    return "ID del correo para el alumno $id_correo_alumno";
});

Route::get('correo_alumno/{correo}', function ($correo) {
    return "Correo electronico del alumno $correo";
});

Route::get('correo_alumno/{fecha_registro}', function ($fecha_registro) {
    return "Fecha de registro de correo del alumno $fecha_registro";
});

Route::get('correo_alumno/{fecha_actualizacion}', function ($fecha_actualizacion) {
    return "Fecha de actualizacion de correo del alumno $fecha_actualizacion";
});

Route::get('correo_alumno/{estado}', function ($estado) {
    return "Estado del alumno $estado";
});



///RUTAS PARA CENTRO EDUCATIVO

Route::get('centro_educativo/{id_centro_educativo}', function ($id_centro_educativo) {
    if($id_centro_educativo==null){
        return "Ingrese un ID de Centro Educativo valido";
    }
    return "ID del Centro Educativo $id_centro_educativo";
});

Route::get('centro_educativo/{codigo_ced}', function ($codigo_ced) {
    return "Codigo del Centro Educativo $codigo_ced";
});

Route::get('centro_educativo/{nombre_centro}', function ($nombre_centro) {
    return "Nombre del Centro Educativo $nombre_centro";
});

Route::get('centro_educativo/{tipo_centro}', function ($tipo_centro) {
    return "Tipo de Centro Educativo $tipo_centro";
});

Route::get('centro_educativo/{fecha_registro}', function ($fecha_registro) {
    return "Fecha de registro del Centro Educativo $fecha_registro";
});

Route::get('centro_educativo/{fecha_actualizacion}', function ($fecha_actualizacion) {
    return "Fecha de actualizacion del Centro Educativo $fecha_actualizacion";
});

Route::get('centro_educativo/{estado}', function ($estado) {
    return "Estado del Centro Educativo $estado";
});



///RUTAS PARA CORREO CENTRO EDUCATIVO

Route::get('correo_centro_ed/{id_correo_centro_ed}', function ($id_correo_centro_ed) {
    if($id_correo_centro_ed==null){
        return "Ingrese un ID de correo valido";
    }
    return "ID del correo del Centro Educativo $id_correo_centro_ed";
});

Route::get('correo_centro_ed/{correo}', function ($correo) {
    return "Correo electronico del Centro Educativo $correo";
});

Route::get('correo_centro_ed/{fecha_registro}', function ($fecha_registro) {
    return "Fecha de registro de correo del Centro Educativo $fecha_registro";
});

Route::get('correo_centro_ed/{fecha_actualizacion}', function ($fecha_actualizacion) {
    return "Fecha de actualizacion de correo del aCentro Educativoumno $fecha_actualizacion";
});

Route::get('correo_centro_ed/{estado}', function ($estado) {
    return "Estado del Centro Educativo $estado";
});



///RUTA PARA LA TABLA MATERIA

Route::get('materia/{id_materia}', function ($id_materia) {
    if($id_materia==null){
        return "Ingrese un ID de materia valido";
    }
    return "ID del materia $id_materia";
});

Route::get('materia/{nombre_materia}', function ($nombre_materia) {
    return "Nombre de la materia $nombre_materia";
});

Route::get('materia/{fecha_registro}', function ($fecha_registro) {
    return "Fecha de registro de la materia $fecha_registro";
});

Route::get('materia/{fecha_actualizacion}', function ($fecha_actualizacion) {
    return "Fecha de actualizacion de la materia $fecha_actualizacion";
});



///RUTA PARA LA TABLA CONTENIDO

Route::get('contenido/{id_contenido}', function ($id_contenido) {
    if($id_contenido==null){
        return "Ingrese un ID de contenido valido";
    }
    return "ID del contenido $id_contenido";
});

Route::get('contenido/{tema}', function ($tema) {
    return "Tema del contenido: $tema";
});

Route::get('contenido/{nivel}', function ($nivel) {
    return "Nivel del contenido: $nivel";
});

Route::get('contenido/{desarrollo}', function ($desarrollo) {
    return "Desarrollo: $desarrollo";
});

Route::get('contenido/{fecha_registro}', function ($fecha_registro) {
    return "Fecha de registro del contenido: $fecha_registro";
});

Route::get('contenido/{fecha_actualizacion}', function ($fecha_actualizacion) {
    return "Fecha de actualizacion del contenido: $fecha_actualizacion";
});

Route::get('contenido/{estado}', function ($estado) {
    return "Estado del contenido: $estado";
});

///RUTA PARA LA TABLA CUESTIONARIO

Route::get('cuestionario/{id_cuestionario}', function ($id_cuestionario) {
    if($id_cuestionario==null){
        return "Ingrese un ID de cuestionario valido";
    }
    return "ID del cuestionario $id_cuestionario";
});

Route::get('cuestionario/{hora_inicio_cuest}', function ($hora_inicio_cuest) {
    return "Hora de inicio del cuestionario $hora_inicio_cuest";
});

Route::get('cuestionario/{hora_finalizacion_cuest}', function ($hora_finalizacion_cuest) {
    return "Hora de finalizacion del cuestionario $hora_finalizacion_cuest";
});

Route::get('cuestionario/{fecha_realizacion}', function ($fecha_realizacion) {
    return "Fecha de realizacion del cuestionario $fecha_realizacion";
});


Route::get('cuestionario/{fecha_actualizacion}', function ($fecha_actualizacion) {
    return "Fecha de actualizacion del cuestionario $fecha_actualizacion";
});

Route::get('cuestionario/{numero_intento}', function ($numero_intento) {
    return "Numero de intentos del cuestionario $numero_intento";
});

Route::get('cuestionario/{estado}', function ($estado) {
    return "Estado del cuestionario $estado";
});



///RUTA PARA LA TABLA HISTORIAL

Route::get('historial/{id_historial}', function ($id_historial) {
    if($id_historial==null){
        return "Ingrese un ID de historial valido";
    }
    return "ID del historial: $id_historial";
});

Route::get('historial/{ultimo_ingreso_sistema}', function ($ultimo_ingreso_sistema) {
   return "Ultimo ingreso del estudiante al sistema $ultimo_ingreso_sistema";
});


///RUTA PARA LA TABLA HISTORIAL INICIO DE SESION

Route::get('historial/{id_historial_inicio_sesion}', function ($id_historial_inicio_sesion) {
    if($id_historial_inicio_sesion==null){
        return "Ingrese un ID de historial de inicio de sesion valido";
    }
    return "ID de historial de inicio de sesion: $id_historial_inicio_sesion";
});

Route::get('historial/{hora_inicio}', function ($hora_inicio) {
    return "Hora de inicio de sesion: $hora_inicio";
});

Route::get('historial/{hora_finalizacion}', function ($hora_finalizacion) {
    return "Hora de finalizacion de sesion: $hora_finalizacion";
});

Route::get('historial/{estado}', function ($estado) {
    return "Estado de la sesion: $estado";
});


///RUTA PARA LA TABLA DIRECCION

Route::get('direccion/{id_direccion}', function ($id_direccion) {
    if($id_direccion==null){
        return "Ingrese un ID de direccion valido";
    }
    return "ID de direccion: $id_direccion";
});

Route::get('direccion/{fecha_registro}', function ($fecha_registro) {
    return "Fecha de registro de la direccion: $fecha_registro";
});

Route::get('direccion/{fecha_actualizacion}', function ($fecha_actualizacion) {
    return "Fecha de actualizacion de la direccion: $fecha_actualizacion";
});

Route::get('direccion/{estado}', function ($estado) {
    return "Estado de la direccion: $estado";
});



///RUTA PARA LA TABLA DEPARTAMENTO

Route::get('departamento/{id_departamento}', function ($id_departamento) {
    if($id_departamento==null){
        return "Ingrese un ID de departamento valido";
    }
    return "ID del departamento: $id_departamento";
});

Route::get('departamento/{nombre_departamento}', function ($nombre_departamento) {
   return "Nombre del departamento: $nombre_departamento";
});


///RUTA PARA LA TABLA MUNICIPO

Route::get('municipio/{id_municipio}', function ($id_municipio) {
    if($id_municipio==null){
        return "Ingrese un ID de municipio valido";
    }
    return "ID del muncipio: $id_municipio";
});

Route::get('municipio/{nombre_municipio}', function ($nombre_municipio) {
    return "Nombre del municipio: $nombre_municipio";
 });