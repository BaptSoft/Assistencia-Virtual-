<?php
namespace App\Http\Controllers;
use App\Http\Controllers\API\V1\BaseController;
use Illuminate\Http\Request;
use App\Models\Ticket;
class ticketkController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = User::latest()->paginate(10)

        $tickets = Ticket::latest()->get();
        return response()->json($tickets); 
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
        $validatedDate= $request->validate([
                'assunto'=>'required',
                'descricao'=>'required',
                'prioridade'=>'required',
                'sector'=>'required',
                'status'=>'required',
        ],
               [
                 'assunto.required'=>'O campo Assunto e obrigatorio'
                
                ]
            
            );

              
             Ticket::create($validatedDate);
             
             return $this->sendResponse($validatedDate,'Tickets Criado com Sucesso');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
         return response()->json($ticket);  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        //
        return view('tickets.id',compact("ticket"));

        // $ticket = Ticket::find($id);
        // $ticket->edit();
        // return response()->json([
        //         'mensaje'=> 'Actualizado com Sucesso'
        //     ]);
    } 

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        Ticket::where('id',$request->id)->update(
            ["status"=> $request->status,
            
        ]);
        return $this->sendResponse($request,'Status Alterado com Sucesso'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $ticket = Ticket::find($id);
        $ticket->delete();
        return $this->sendResponse($ticket,'Tickets Eliminado');

    }
    public function buscarTickets(Request $request)
    {

    $ticket = Ticket::find($request->id);
     return response()->json($ticket,200
    );
}}
