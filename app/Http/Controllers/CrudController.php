<?php

namespace Crud\Http\Controllers;

use Illuminate\Http\Request;
use Crud\Http\Requests\CrudRequest;
use Crud\Crud;
use Crud\Empresa;



class CrudController extends Controller
{

    public function __construct()
    {
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = Crud::all();

        return view('index')->with(['dados' => $dados]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add')->with(['operacao' => 'Novo','action'=>'add', 'btn' => 'Salvar', 'method' => 'POST', 'dados' => null]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrudRequest $request)
    {        
      try
      {
        //$crud = Crud::findOrFail($request->id) ? $crud->update() : Crud::create($request->all());               
        Crud::create($request->all());        
      }  
      catch(\Exception $e)
      {
        return redirect('/')->with('error','Erro ao gravar os dados a operação foi cancelada: '. $e->getMessage());
      }
      return redirect('/')->with('success','Dados gravados com sucesso!');
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id = null)
    {
        $dados = Crud::where('id','=',$id)->first();
        if(! $dados)
            return view('notFound');
        return view('update')->with(['operacao' => 'Atualizar', 'btn' => 'Atualizar', 'dados' => $dados]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        try{
          $remover = Crud::findOrFail($request->id);
          $remover->delete();          
        }
        catch(\Exception $e){
          return back()->with('error',"Não foi possível remover o item ". $request->nome);
        }
        return back()->with('success', $request->nome . ' removido com sucesso.');
    }

    /**
     * Update the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(CrudRequest $request)    
    {
        try{
            $crud = Crud::findOrFail($request->id);
            $crud->update($request->all());
        }
        catch(\Exception $e)
        {
            return redirect('/')->with('error','Erro ao atualizar os dados a operação foi cancelada: '. $e->getMessage());
      }
      return redirect('/')->with('success','Dados atualizados com sucesso!');
        
    }

    public function empresas($id)
    {
        //$empresas = Empresa::where('id',$id);
        $empresas = Empresa::find(1);


        $arr = array();
        foreach($empresas as $empresa)
        {
            $arr[] = $empresa->servicos()->nome;
        }
        dd($arr);
    }


}
