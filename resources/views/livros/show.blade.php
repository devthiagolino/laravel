@extends('estrutura')

@section('titulo')
@parent
Autores - Obra Fulano De Tal
@endsection

@section('conteudo')

<div class="jumbotron">
	<div class="container">
		<h1>{{ $item->titulo }}</h1>
		<p>{{ $item->resumo }}</p>
		<p><button type="button" class="btn btn-primary btn-lg btn-mais-livro">Mais detalhes</button></p>
		
		<div class="hidden-info">
			<table class="table">
				<tbody>
					<tr>
						<th>Foto</th>
						<td>
							<a href="{{ $item->foto }}" target="_blank">
								<img src="{{ $item->foto }}" alt="{{ $item->tiulo }}" class="img-rounded small">
							</a>
						</td>
					</tr>
					<tr>
						<th>Editora</th>
						<td>{{ $item->editora }}</td>
					</tr>
					<tr>
						<th>ISBN</th>
						<td>{{ $item->isbn }}</td>
					</tr>
					<tr>
						<th>Profundidade</th>
						<td>{{ $item->profundidade }}</td>
					</tr>
					<tr>
						<th>Largura</th>
						<td>{{ $item->largura }}</td>
					</tr>
					<tr>
						<th>QTD de páginas</th>
						<td>{{ $item->qtd_paginas }}</td>
					</tr>
					<tr>
						<th>Idioma</th>
						<td>{{ $item->idioma }}</td>
					</tr>
					<tr>
						<th>Ano de edição</th>
						<td>{{ $item->ano_edicao }}</td>
					</tr>
					<tr>
						<th>Valor em R$</th>
						<td>{{ $item->valor }}</td>
					</tr>
				</tbody>
			</table>
		</div>

	</div>
</div>

@endsection