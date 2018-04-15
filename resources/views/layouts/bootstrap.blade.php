<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->    
    {{Html::style('css/bootstrap.min.css')}}
    {{Html::style('css/app.css')}}
    <title>CRUD</title>
  </head>
  <body>
    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
  <a href="/" class="btn btn-primary">Home</a>

  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Crud options
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="/add">Add</a>
      <a class="dropdown-item" href="">Change</a>
      <a class="dropdown-item" href="#">Remove</a>
    </div>
  </div>
</div>

    @yield('content')

    <!-- JS scripts -->
    {{Html::script('js/jquery-3.3.1.min.js')}}  
    {{Html::script('js/jquery.mask.min.js')}}      
    {{Html::script('js/popper.min.js')}}  
    {{Html::script('js/bootstrap.min.js')}}   
    {{Html::script('js/crud.js')}}  
  
  </body>
</html>
