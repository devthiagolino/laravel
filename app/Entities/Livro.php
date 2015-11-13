<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Livro extends Model implements Transformable
{
	use TransformableTrait;
	
	protected $fillable = [
		'titulo',
		'resumo',
		'foto',
		'editora',
		'isbn',
		'altura',
		'largura',
		'profundidade',
		'qtd_paginas',
		'idioma',
		'ano_edicao',
		'valor'
	];

	public static $regras = [
		'titulo' => 'required|min:10',
		'isbn' => 'required|min:10',
		'resumo' => 'required|min:30',
		'foto' => 'required|url',
		'editora' => 'required',
		'altura' => 'required',
		'profundidade' => 'required',
		'qtd_paginas' => 'required',
		'idioma' => 'required',
		'ano_edicao' => 'required|numeric',
		'largura' => 'required',
		'valor' => 'required'
	];

}
