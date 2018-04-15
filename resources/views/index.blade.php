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
    
    @forelse($dados as $dado)
      <tr>
          <td>{{$dado->nome}}</td>
          <td>{{ $dado->descricao}}</td>
          <td>
            <a href="/{{$dado->id}}" class="btn btn-primary">Editar</a>
            <small class="text-muted"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#removerModal-{{$dado->id}}">
            Remover
            </button></small>

          </td>
      </tr>
    @empty
      <tr>
        <td colspan="2">Nenhum registro encontrado.</td>
      </tr>
    @endforelse
  </table>

</div>

  @foreach($dados as $dado)
  <!-- Modal Message are you sure to exclude? -->
  <div class="modal fade" id="removerModal-{{$dado->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="removerModal">Tem certeza disso?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Você está prestes a excluir o item {{$dado->nome}}. Tem certeza disso?
      </div>
      <div class="modal-footer">
        <form action="/remover" method="POST">
          {{ csrf_field() }}
          <input type="hidden" name="id" id="id" value="{{$dado->id}}"/>
          <input type="hidden" name="nome" id="nome" value="{{$dado->nome}}"/>

          <button type="button" class="btn btn-secondary" data-dismiss="modal">Não, mudei de idéia.</button>
          <button type="submit" class="btn btn-primary">Sim, apague isso.</button>
        </form>
      </div>
    </div>
  </div>
  </div>
  @endforeach

@endsection
