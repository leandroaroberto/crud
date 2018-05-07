@extends('layouts.bootstrap')
@section('content')

<div class="container">
  <h1>Empresas</h1>

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
      <td><a href="/empresas/{{$empresa->id}}">view</a></td>
    </tr>
  @empty
    <tr>
      <td colspan="2">Sorry, nothing has been found.</td>
    </tr>
  @endforelse
</table>
</div>

@endsection
