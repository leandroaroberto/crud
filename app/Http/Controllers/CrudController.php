<?php

namespace Crud\Http\Controllers;

use Illuminate\Http\Request;
use Crud\Crud;

class CrudController extends Controller
{
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
    public function store(Request $request)
    {
      $request->validate([
        'nome' => 'required|max:20|unique:crud,nome',
      ]);

      $crud = $request->id != null  ? Crud::findOrFail($request->id) : new Crud;
      $crud->nome = $request->nome;
      $crud->descricao = $request->descricao;

      if($crud->save())
      {
        return redirect('/')->with('success','Dados gravados com sucesso!');
      }
      return redirect('/')->with('error','Erro ao gravar os dados a operação foi cancelada.');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dados = Crud::where('id','=',$id)->first();
        return view('add')->with(['operacao' => 'Atualizar','action'=>'update', 'btn' => 'Atualizar', 'method' => 'POST', 'dados' => $dados ]);
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
          return back()->with('success', $request->nome . ' removido com sucesso.');
        }
        catch(\Exception $e){
          return back()->with('error',"Não foi possível remover o item ". $request->nome);
        }
    }
}
