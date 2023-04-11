<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Carbon\Carbon;

class AutenticacionController extends Controller
{ 


    ////DEFINIENDO LOS 4 METODOS A IMPLEMENTAR: REGISTRO - INICIO DE SESION - CREACION DE PERFIL -CIERRE DE SESION
    public function registro(Request $request) {
        $actual = Carbon::now();
        $data = [
            'user' => $request->input('usuario'),
            'email' => $request->input('email'),
            'password_encriptada' => bcrypt($request->input('password')),
            'estado' => 1,
            'fecha_registro' => $actual,
            'fecha_actualizacion' => $actual,
        ];
        $nuevoUsuario = new User($data);
        $nuevoUsuario->save();
        $mensaje = ['mensaje' => 'usuario registrado exitosamente'];
        return response()->json($mensaje);
    }
    
    public function iniciar_sesion(Request $request) {
        $credenciales = [
            'email' => $request->input('correo'),
            'password' => $request->input('password')
        ];
        if (Auth::attempt($credenciales)) {
            $usuario = $request->user();
            $generarToken = $usuario->createToken('Personal Access Token');
            $token = $generarToken->token;
            $token->save();
            $respuesta = [
                'token_acceso' => $generarToken->accessToken,
                'tipo_token' => 'Bearer',
                'fecha_expiracion' => $generarToken->token->expires_at,
            ];
            return response()->json($respuesta);
        }
        $mensaje = ['mensaje' => 'usuario no encontrado'];
        return response()->json($mensaje, 401);
    }

    public function cierre_sesion(Request $request) {
    
    }
        
}
