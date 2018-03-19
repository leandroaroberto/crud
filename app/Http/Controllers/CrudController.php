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
    public function store(Request $request, $id = null)
    {
      $request->validate([
        'nome' => 'required|max:20|unique:crud,nome',
      ]);

      $crud = $id  ? Crud::findOrFail($id) : new Crud;

      //$crud = new Crud();
      $crud->nome = $request->nome;
      $crud->descricao = $request->descricao;

      if($crud->save())
      {
        return back()->with('success','Dados gravados com sucesso!');
      }
      return back()->with('error','Erro ao gravar os dados a operação foi cancelada.');

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
        //return "Editando $id";
        $dados = Crud::where('id','=',$id)->first();
        return view('add')->with(['operacao' => 'Atualizar','action'=>'update', 'btn' => 'Atualizar', 'method' => 'POST', 'dados' => $dados ]);
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
        //redirect para store com $id != null
        //return "Atualizado";
        return redirect()->action('CrudController@store', ['id' => $request->id]);
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
    }
}
