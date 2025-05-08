<?php

namespace App\Http\Controllers;
use App\Models\Comentarios;
use Illuminate\Http\Request;

class ComentariosController extends Controller
{
    function index(){
        $comentarios = Comentarios::get();
        return view('comentarios.index', [
            'comentarios' => $comentarios
        ]);
    }

    function guardar(Request $request)
    {
        $comentario = new Comentarios();
        $comentario->comentario = $request->contenido; 
        $comentario->save();

        session(['modo' => $request->modo]);

        return redirect()->route('n.index');
    }
}
