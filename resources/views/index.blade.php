@extends('layouts.bootstrap')
@section('content')

<div class="container">
  <h1 class="text-center">CRUD Example</h1>

  @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
    	<button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
    </div>
  @elseif ($message = Session::get('error'))
    <div class="alert alert-danger alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
    </div>
  @endif

  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

<div class="form-group">
{!! Form::open(['url' => 'foo/bar']) !!}
<p>
    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" value="{{old('nome')}}" required/>
</p>
<p>
    <input type="text" class="form-control" name="descricao" id="descricao" placeholder="Descrição" value="{{old('descricao')}}" />
</p>
<p>
    <input type="submit" class="btn btn-success btn-block" value="Salvar"/>
</p>
{!! Form::close() !!}
</div>

@endsection
