@extends('estrutura')

@section('titulo')
@parent
Livros
@endsection

@section('conteudo')

@if(session()->has('sucesso'))
<div class="alert alert-success" role="alert">
	{{ session()->get('sucesso') }}
</div>
@endif

@if(session()->has('erro'))
<div class="alert alert-danger" role="alert">
	{{ session()->get('erro') }}	
</div>
@endif

<div class="panel panel-default">
	<!-- Default panel contents -->
	<div class="panel-heading">
		<h3>Últimos Livros 
			<span class="badge">{{ $resultado->total() }}</span>
		</h3>
		<a class="btn btn-primary" href="{{ route('livros.create') }}" role="button">Cadastrar</a>		
	</div>
	<div class="panel-body">

		@if(count($resultado))

		<p>Acompanhe todos os livros em nosso acervo online! Chega logo!</p>
		
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Cód</th>
					<th>ISBN</th>
					<th>Título</th>
					<th>Adicionado em</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($resultado as $livro)
				<tr>
					<td>{{ $livro->id }}</td>
					<td>
						<a href="{{ route('livros.show', $livro->id) }}">
							{{ $livro->isbn }}
						</a>
					</td>
					<td>{{ $livro->titulo }}</td>
					<td>{{ $livro->created_at->format('d/m/Y H:i') }}</td>
					<td>
						<a href="{{ route('livros.edit', $livro->id) }}" class="btn btn-default control-index" aria-label="Ler">
							<span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
						</a>
						<form action="{{ route('livros.destroy', $livro->id) }}" method="post" class="control-index">
							{{ csrf_field() }}
							<input type="hidden" name="_method" value="delete">
							<button type="submit" href="" class="btn btn-danger" aria-label="Remover">
								<span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>
							</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		
		{!! $resultado->render() !!}

		@else

		<div class="alert alert-warning" role="alert">
			<p><strong>Ops!</strong>
				Alguém esqueceu de cadastrar os livros, desculpe.
			</p>
		</div>

	</div>
	@endif
</div>
@endsection