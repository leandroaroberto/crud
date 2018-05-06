<?php

namespace Crud;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    
    public function servicos()
    {
        return $this->hasMany('Crud\Servico','empresas_id');
    }
}
