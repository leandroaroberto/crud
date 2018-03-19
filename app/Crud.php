<?php

namespace Crud;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    protected $table = "crud";

    protected $fillable = ['nome','descricao'];

}
