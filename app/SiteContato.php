<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteContato extends Model
{
    //
    protected $fillable = ['name', 'email', 'telefone', 'motivo_contato', 'mensagem'];

}
