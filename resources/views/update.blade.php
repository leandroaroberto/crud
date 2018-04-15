@extends('layouts.bootstrap')
@section('content')



<div class="container">

    <h1 class="text-center">CRUD - {{ $operacao}}</h1>
  @include('layouts.header')

  {!! Form::model($dados, ['route' => ['update', $dados->id]]) !!}  
  
  @include('components.form')
  
  {!! Form::close() !!}
  
</div>

@endsection
