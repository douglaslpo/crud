<?php

namespace App\Http\Controllers;

use App\Models\Contrato;
use App\Models\Usuario;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input\Input;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contratos = Contrato::all();
        $usuarios = Usuario::all();
        return view('usuarios.create', compact('usuarios','usuarios'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome'=>'required',
            'cpf'=> 'required'
        ]);

        $usuario = new Usuario([
            'nome' => $request->get('nome'),
            'cpf'=> $request->get('cpf'),
        ]);

            $usuario->save();
                return redirect('/usuarios.create')->with('success', 'Usuario adiconado');

                
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
            return view('usuarios.show',compact('usuario'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        return view('usuarios.edit',compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Usuario $usuario,Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'cpf' => 'required',
        ]);

        $usuario->update($request->all());

        return redirect()->route('usuarios.index')
                        ->with('sucess','O usuario foi atualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();

        return redirect()->route('usuarios.index')
                        ->with('sucess','O usuario foi deletado com sucesso');
    }
}
