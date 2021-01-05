<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use App\Models\Model\Cliente;
use Illuminate\Support\Facades\Crypt;

class ClienteController extends Controller
{

    private $objCliente;

    public function __construct()
    {
        $this->objCliente=new Cliente();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cliente=$this->objCliente->all();
        return view('index', (compact('cliente')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cliente=$this->objCliente->all();
        return view('create', compact('cliente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteRequest $request)
    {
        $cadastro=$this->objCliente->create([
            'id_cliente'=>$request->id_cliente,
            'nome_cliente'=>$request->nome_cliente,
            'email_cliente'=>$request->email_cliente  ,
            'telefone_cliente'=>$request->telefone_cliente,
            'senha_cliente'=> Crypt::encrypt($request->senha_cliente),
            'data_nasc_cliente'=>$request->data_nasc_cliente
        ]);
        if($cadastro){
            $cliente=$this->objCliente->all();
            return view('alert', compact('cliente'));

        }
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function alert()
    {
        $cliente=$this->objCliente->all()->sortByDesc('id_cliente');
        return view('alert', compact('cliente'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_cliente
     * @return \Illuminate\Http\Response
     */
    public function show(int $id_cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_cliente
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(int $id_cliente)
    {
        $cliente=$this->objCliente->find($id_cliente);
        return view('edit', compact('cliente'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_cliente
     * @return \Illuminate\Http\Response
     */
    public function update(int $id_cliente, ClienteRequest $request)
    {
        $cliente=$this->objCliente->find($id_cliente);
        $requisicao=$request->all();
        $requisicao['senha_cliente']=Crypt::encrypt($request->senha_cliente);
        $cliente->fill($requisicao);
        $cliente->save();
        return view('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_cliente)
    {
        //
    }
}
