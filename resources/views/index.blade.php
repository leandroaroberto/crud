@extends('layouts.bootstrap')
@section('content')

<div class="container">

    <h1 class="text-center">CRUD Example - List</h1>
  @include('layouts.header')

    <table class="table table-stripped">
    <tr>
      <th>Nome</th>
      <th>Descrição</th>
      <th></th>
    </tr>
    @foreach($dados as $dado)
      <tr>
          <td>{{$dado->nome}}</td>
          <td>{{ $dado->descricao}}</td>
          <td>
            <a href="/{{$dado->id}}">Editar</a>
            Remover
          </td>
      </tr>
    @endforeach
  </table>


</div>
@endsection
