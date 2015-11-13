@extends('estrutura')

@section('titulo')
	@parent
	- Autores
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
	
	<div class="panel-heading">
		<h3>Nossos autores
			<span class="badge">{{ $resultado->total() }}</span>
		</h3>
	</div>

	<div class="panel-body">

		@if(count($resultado))

		<p>Conheça nossos mestres! Chega logo!</p>
		
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Cód</th>
					<th>Nome</th>
					<th>E-mail</th>
					<th>Telefone</th>
					<th>Adicionado em</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($resultado as $autor)
				<tr>
					<td>{{ $autor->id }}</td>
					<td>{{ $autor->nome }}</td>
					<td>{{ $autor->email }}</td>
					<td>{{ $autor->telefone }}</td>
					<td>{{ $autor->created_at->format('d/m/Y H:i') }}</td>
					<td>
						<a href="{{ route('autores.edit', $autor->id) }}" class="btn btn-default control-index" aria-label="Ler">
							<span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
						</a>
						<form action="{{ route('autores.destroy', $autor->id) }}" method="post" class="control-index">
							{{ csrf_field() }}
							<input type="hidden" name="_method" value="delete">
							<button type="submit" href="" class="btn btn-danger" aria-label="Remover">
								<span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>
							</button>
						</form>
					</td>
				@endforeach
			</tbody>
		</table>
	
		{!! $resultado->render() !!}
		
		@else

		<div class="alert alert-warning" role="alert">
			<p><strong>Ops!</strong>
				Alguém esqueceu de cadastrar os autores, desculpe.
			</p>
		</div>

	</div>
	@endif
	
</div>
@endsection