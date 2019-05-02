<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $fillable = [ 'nome', 'marca', 'valor', 'quantidade' ];

}
