@extends('estrutura')

@section('titulo')
@parent
LivroTeca
@endsection

@section('conteudo')

<div class="panel panel-default">
	<!-- Default panel contents -->
	<div class="panel-heading"><h3>Últimos Livros</h3></div>
	<div class="panel-body">
		<p>Acompanhe todos os livros em nosso acervo online! Chega logo!</p>
	</div>

	<!-- Table -->
	<table class="table table-striped">
		<thead>
			<tr>
				<th>ISBN</th>
				<th>Título</th>
				<th>Autor</th>
				<th>Adicionado em</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@for($i=1;$i<=10;$i++)
			<tr>
				<td>{{ str_random(10) }}</td>
				<td>Lorem ipsum</td>
				<td>Thiago</td>
				<td>23/01/2015 às 14:34</td>
				<td>
					<button type="button" class="btn btn-default" aria-label="Ler">
						<span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-default" aria-label="Remover">
						<span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>
					</button>
				</td>
			</tr>
			@endfor
		</tbody>
	</table>
</div>
@endsection