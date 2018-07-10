@extends('layouts.bootstrap')
@section('content')


<div class="container">
  <h1>Empresas</h1>
  <div class="zoom-right"></div>
  <table class="table">
    <tr class="thead-dark">
      <th>CNPJ</th>
      <th>Razão Social</th>
      <th></th>
    </tr>
  @forelse($empresas as $empresa)
    <tr>
      <td>{{ $empresa->cnpj }}</td>
      <td>{{ $empresa->razao_social }}</td>
      <td width="20%"><img src="upload/foto1.jpg" width="100" height="80" data-zoom-image="upload/foto1.jpg" />&nbsp; <a href="empresas/{{$empresa->id}}">view</a></td>          
    </tr>
  @empty
    <tr>
      <td colspan="2">Sorry, nothing has been found.</td>
    </tr>
  @endforelse
</table>
</div>



@endsection




