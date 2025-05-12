<?php

namespace App\Http\Controllers;
use App\Models\login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LoginController extends Controller
{
    public function index(){
        return view('logins.index');
    }

    public function procesar(Request $request){
        $email = $request->input('email');
        $password = $request->input('contraseña');
        $opcion = $request->input('opciones');

        if($opcion=='opcion2'){
            $sqlUser = DB:: select("SELECT * FROM logins WHERE email = '$email' AND contraseña = '$password'");
        }
        else{
            $sqlUser =login::where('email',$email)->where('contraseña',$password)->get();
        }
        // Si encontró usuario válido
        if (count($sqlUser) > 0) {
            if ($opcion == 'opcion1') {
                return redirect('/comentario');
            } else {
                return response()->json(['mensaje' => 'Inicio de sesión exitoso', 'datos' => $sqlUser]);
            }
        } else {
            return back()->with('error', 'Credenciales incorrectas');
        }
        return $sqlUser;
    }
}
