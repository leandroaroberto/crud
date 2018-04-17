<?php

namespace Crud;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    protected $table = "crud";

    protected $fillable = ['nome','sobrenome','email','descricao','empresa','emp_cnpj','tipo'];


    //public function setCnpjAttribute($cnpj)
    public function setEmpCnpjAttribute($cnpj)
    {
        $cnpj = str_ireplace( "/", "", $cnpj);
        $cnpj = str_ireplace( "-", "", $cnpj);
        $cnpj = str_ireplace( ".", "", $cnpj);        
        $this->attributes['emp_cnpj'] = $cnpj;
    }

}
