@extends('layouts.bootstrap')
@section('content')

<div class="container">
    <h1>Upload your file here</h1>

    <div class="row">
        <div class="col-md-12">
            {{ Form::open(['route' => 'upload.send', 'enctype' => 'multipart/form-data', 'method'=> 'POST']) }} 
            {{ Form::file('excel') }}
        </div>
    </div>  
    <div class="row">
        <div class="col-md-12">
            {{ Form::submit('Send it')}}
            {{ Form::close() }}
        </div>
    </div>


</div>
@endsection