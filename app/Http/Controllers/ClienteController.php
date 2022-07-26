<?php

namespace App\Http\Controllers;
use App\Http\Controllers\API\V1\BaseController;
use App\Models\Cliente;
use Illuminate\Http\Request;
class ClienteController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cliente = Cliente::get();
        return response()->json($cliente); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
              $validateDate=$request-> validate([
                
                'nome'=>'required',
                'Pessoa_contcto'=>'required',
                'morada'=>'required',
                'telefone'=>'required',
                'senha'=>'required',
                'nif'=>'required',
                'email'=>'required',
                'desconto_fatuta'=>$request,
                'conta_corrente'=>'required',
                'limite_credito'=>'required',
                'contrato'=>'required',
                'gestor_cliente'=>'required',
                'tipo_manuntencao'=>'required',
                'estado'=>'required',
                'custo_manuntencao'=>'required',
            ],

                [

                    'nome.required'=>'Nome é Obrigatoria'
                ]
                 );
              
                Cliente::create($validateDate);
             
                return $this->sendResponse($validateDate,'Cliente Criado com Sucesso');
            

        //
        // $cliente = cliente::create([
        //    'nome'=>$request['nome'],
        //    'Pessoa_contcto'=>$request['Pessoa_contcto'],
        //    'morada'=>$request['morada'],
        //    'telefone'=>$request['telefone'],
        //    'senha'=>$request['senha'],
        //    'nif'=>$request['nif'],
        //    'email'=>$request['email'],
        //    'tipo'=>$request['tipo'],
        //    'conta_corrente'=>$request['conta_corrente'],
        //  'desconto_fatuta'=>$request['desconto_fatuta'],
        //    'limite_credito'=>$request['limite_credito'],
        //    'contrato'=>$request['contrato'],
        //    'gestor_cliente'=>$request['gestor_cliente'],
        //    'tipo_manuntencao'=>$request['tipo_manuntencao'],
        //    'estado'=>$request['estado'],
        //    'custo_manuntencao'=>$request['custo_manuntencao'],
         
        // return $this->sendResponse($cliente,'Cliente Criado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        return view( 'clientes.id',compact("cliente"));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        Cliente::where('id',$request->id)->update(
            ["nome"=> $request->nome,
           "Pessoa_contcto"=>$request->Pessoa_contcto,
           "morada"=>$request->morada,
           "telefone"=>$request->telefone,
           "senha"=>$request->senha,
           "nif"=>$request->nif,
           "email"=>$request->email,
           "tipo"=>$request->tipo,
           "conta_corrente"=>$request->conta_corrente,
        //  "desconto_fatuta"=>$request->desconto_fatuta,
           "limite_credito"=>$request->limite_credito,
           "contrato"=>$request->contrato,
           "gestor_cliente"=>$request->gestor_cliente,
           "tipo_manuntencao"=>$request->tipo_manuntencao,
           "estado"=>$request->estado,
           "custo_manuntencao"=>$request->custo_manuntencao, 
           
          
           ]
         
        );
       
    
        return $this->sendResponse($request,'Cliente Alterado com Sucesso'); 
    
       
        
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete($id);
        return $this->sendResponse($cliente,'Cliente Eliminado com Sucesso'); 
    }

    public function buscarClientes(Request $request)
    {

       $cliente = Cliente::find($request->id);
     return response()->json($cliente,200
    );
   
}
}
