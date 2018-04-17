
    {{ Form::hidden('id', isset($dados->id) ? $dados->id : null) }}
  <div class="row">    
    <div class="col-md-6 form-group">
        {{ Form::label('nome', 'Nome: ') }}    
        {{ Form::text('nome', null, ['class' => 'form-control', 'placeholder' => 'Digite seu Nome','maxlength'=>50]) }}
    </div>
    <div class="col-md-6 form-group">
        {{ Form::label('sobrenome', 'Sobrenome: ') }}    
        {{ Form::text('sobrenome', null, ['class' => 'form-control', 'placeholder' => 'Digite seu Sobrenome','maxlength'=>50]) }}
    </div>
</div>
<div class="row">
    <div class="col-md-12 form-group">
        {{ Form::label('email', 'E-mail: ') }}  
        {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Digite seu email','maxlength'=>100]) }}
    </div>
</div>

<div class="row">
    <div class="col-md-12 form-group">
        {{ Form::label('descricao', 'Descrição: ') }}    
        {{ Form::textarea('descricao', null, ['class' => 'form-control', 'placeholder' => 'Digite sua descrição aqui']) }}      
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        {{ Form::label('empresa', 'Tipo de Empresa: ') }}       
    </div>
</div>
<div class="row form-group">
    <div class="col-md-12">
        {{ Form::label('empresa', 'Nacional: ',['class'=> 'radio-inline']) }}    
        {{ Form::radio('empresa', '1',true) }}
        {{ Form::label('empresa', 'Estrangeira: ',['class'=> 'radio-inline']) }}                               
        {{ Form::radio('empresa', '2',null) }}
    </div>   
</div>
<div class="row form-group">
    <div class="col-md-12">
        {{ Form::label('emp_cnpj', 'CNPJ: ') }}    
        {{ Form::text('emp_cnpj', null, ['class' => 'form-control cnpj', 'placeholder' => 'Digite o CNPJ']) }}
    </div>
</div>

<div class="row form-group">
    <div class="col-md-12">
        {{ Form::label('tipo', 'Matriz: ') }}            
        {{ Form::select('tipo',
                 ['1' => 'Sim',
                 '2' => 'Não',],    
             null,['class'=>'form-control form-control-lg','placeholder'=>'Escolha o tipo de Empresa']) }}
    </div>
</div>

<div class="row">
    <div class="col-md-12 form-group">
        {{ Form::submit($btn,['class'=> 'btn btn-success btn-block']) }}
             
    </div>
</div>