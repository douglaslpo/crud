<?php

namespace App\Http\Controllers;

use App\Models\Contrato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ContratoController extends Controller
{

    protected $request;

    public function __construct(Request $request)
    {

        //$this-> request-> $request;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $contratos = Contrato::all();

        return view('contratos.create', [

           // 'contratos' -> $contratos,
        ]
    );


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contrato.create');
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
            'cnpj' => 'required',
            'razao_social' => 'required',
            'nome_fantasia' => 'required',
            'email' => 'required',
            'logotipo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required'
        ]);

        if ($files = $request->file('image')) {
           $destinationPath = 'public/image/'; // pasta de armazenamento
           $logomarca = date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $logomarca);
           $insert['image'] = "$logomarca";
        }

        $contrato = new Contrato([
            'cnpj' => $request->get('cnpj'),
            'razao_social'=> $request->get('razao_social'),
            'nome_fantasia' => $request->get('nome_fantasia'),
            'email' => $request->get('email'),
            'logotipo' => $request->get('logotipo'),
            'status' => $request->get('status'),
        ]);

        $contrato->save();
                return redirect('/contratos.create')
                ->with('success','Contrato, adicionado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Contrato::where('id',$id)->delete();
        return Redirect::to('contratos')->with('success','Contrato excluido com sucesso');

    }
}
