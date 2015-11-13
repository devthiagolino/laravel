<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Autor extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = ['nome','email','telefone','foto','dt_nascimento'];
    protected $date = ['dt_nascimento'];
    protected $table = 'autores';

    public static $regras = [
		'nome' => 'required|min:10',
		'email' => 'required|email',
		'telefone' => 'required|min:8',
		'foto' => 'required|url'
	];

}
