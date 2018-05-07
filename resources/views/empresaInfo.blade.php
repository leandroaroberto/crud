@extends('layouts.bootstrap')
@section('content')

<div class="container">
  
  <div class="row">
    <div class="col-md-12">    
      <h1>Empresa {{$empresa[0]['ID']}}</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
        Nome: {{$empresa[0]['RazaoSocial']}}
    </div>
    <div class="col-md-6">
        CNPJ: {{$empresa[0]['CNPJ']}}
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">    
      <h4>Serviços</h4>
    </div>
    @forelse($empresa[0]['servicos'] as $servico)
      <div class="col-md-12">
        {{ $servico[0] }}
      </div>
    @empty
      <div class="col-md-12">
      Nothing has found.
      </div>
    @endforelse
  </div>
  <div class="row">
    <a href="/empresas" class="btn btn-primary">Voltar</a>
  </div>

  

@endsection