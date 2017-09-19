<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudante extends Model
{
    protected $fillable=[
        'nr_estudante',
        'nome'
    ];
}
