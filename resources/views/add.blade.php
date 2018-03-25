@extends('layouts.bootstrap')
@section('content')

<div class="container">

    <h1 class="text-center">CRUD Example - {{ $operacao}}</h1>
  @include('layouts.header')

  <div class="form-group">
  {!! Form::open(['route' => $action,'method' => $method]) !!}
  <input type="hidden" name="id" value="{{ isset($dados->id) ? $dados->id : null }}" />
  <p>
      <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" value="{{ isset($dados->nome) ? $dados->nome :old('nome')}}"/>
  </p>
  <p>
      <input type="text" class="form-control" name="descricao" id="descricao" placeholder="Descrição" value="{{ isset($dados->descricao) ? $dados->descricao : old('descricao')}}" />
  </p>
  <p>
      <input type="submit" class="btn btn-success btn-block" value="{{$btn}}"/>
  </p>
  {!! Form::close() !!}
  </div>

</div>

@endsection
