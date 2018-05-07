<?php

namespace Crud;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    
    public function servicos()
    {
        return $this->belongsToMany('Crud\Servico');
        
    }
}
