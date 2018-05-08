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
    @if(isset($empresa[0]['servicos']))
      @foreach($empresa[0]['servicos'] as $servico)
        <div class="col-md-12">
          {{ $servico[0] }}
        </div>    
      @endforeach
    @else 
      <div class="col-md-12">
        Nothing has found.
      </div>
    @endif
  </div>
  <div class="row">
      <div class="col-md-12">
        <a href="/empresas" class="btn btn-secondary btn-block" >Voltar</a>
      </div>
  </div>

  

@endsection