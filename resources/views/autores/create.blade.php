@extends('estrutura')

@section('titulo')
@parent
Autores - Novo
@endsection

@section('conteudo')
<h1>{{ $acao }} autor</h1>
<hr>

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

@if (count($errors) > 0)
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<div class="row">
  <form action="{{ $rota }}" enctype="multipart/form-data" id="form" method="post">

    {{ csrf_field() }}

    <div class="form-group col-md-6">
      <label for="nome">Nome</label>
      <input type="text" class="form-control" name="nome" id="nome" value="{{ $item->nome }}">
    </div>

    <div class="form-group col-md-6">
      <label for="email">E-mail</label>
      <input type="text" class="form-control" name="email" id="email" value="{{ $item->email }}">
    </div>
    
    <div class="form-group col-md-6">
      <label for="telefone">Telefone</label>
      <input type="text" class="form-control" name="telefone" id="telefone" value="{{ $item->telefone }}">
    </div>

    <div class="form-group col-md-6">
      <label for="foto">Foto URL</label>
      <input type="text" class="form-control" id="foto" name="foto" value="{{ $item->foto }}">
    </div>

    <div class="form-group col-md-3">
      <label for="dt_nascimento">Data de nascimento</label>
      <input type="text" class="form-control" name="dt_nascimento" id="dt_nascimento" value="{{ $item->dt_nascimento }}">
    </div>
    
    @if($item->foto)
    <div class="col-md-6">
      <a href="{{ $item->foto }}" target="_blank">
        <img src="{{ $item->foto }}" alt="{{ $item->nome }}" class="img-rounded small edit">
      </a>
    </div>
    @endif

    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">{{ $acao }} autor</button>
      <a class="btn btn-warning" href="{{ route('autores.index') }}" role="button">Cancelar</a>
    </div>

    <input type="hidden" name="_method" value="{{ $_method }}">

  </form>
</div>
@endsection