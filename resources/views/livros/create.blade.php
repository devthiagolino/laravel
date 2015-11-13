@extends('estrutura')

@section('titulo')
@parent
Livros - Novo
@endsection

@section('conteudo')
<h1>{{ $acao }} livro</h1>
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
      <label for="titulo">Título</label>
      <input type="text" class="form-control" name="titulo" id="titulo" value="{{ $item->titulo }}">
    </div>

    <div class="form-group col-md-6">
      <label for="resumo">Resumo</label>
      <input type="text" class="form-control" name="resumo" id="resumo" value="{{ $item->resumo }}">
    </div>
    
    <div class="form-group col-md-6">
      <label for="editora">Editora</label>
      <input type="text" class="form-control" name="editora" id="editora" value="{{ $item->editora }}">
    </div>

    <div class="form-group col-md-6">
      <label for="isbn">ISBN</label>
      <input type="text" class="form-control" id="isbn" name="isbn" value="{{ $item->isbn }}">
    </div>

    <div class="form-group col-md-3">
      <label for="altura">Altura</label>
      <input type="text" class="form-control" name="altura" id="altura" value="{{ $item->altura }}">
    </div>

    <div class="form-group col-md-3">
      <label for="largura">Largura</label>
      <input type="text" class="form-control" name="largura" id="largura" value="{{ $item->largura }}">
    </div>

    <div class="form-group col-md-3">
      <label for="profundidade">Profundidade</label>
      <input type="text" class="form-control" name="profundidade" id="profundidade" value="{{ $item->profundidade }}">
    </div>

    <div class="form-group col-md-3">
      <label for="qtd_paginas">Qtd de páginas</label>
      <input type="text" class="form-control" name="qtd_paginas" id="qtd_paginas" value="{{ $item->qtd_paginas }}">
    </div>

    <div class="form-group col-md-3">
      <label for="idioma">Idioma</label>
      <input type="text" class="form-control" name="idioma" id="idioma" value="{{ $item->idioma }}">
    </div>

    <div class="form-group col-md-3">
      <label for="ano_edicao">Ano de edição</label>
      <input type="text" class="form-control" id="ano_edicao" name="ano_edicao" value="{{ $item->ano_edicao }}">
    </div>

    <div class="form-group col-md-3">
      <label for="valor">Valor em R$</label>
      <input type="text" class="form-control" name="valor" id="valor" value="{{ $item->valor }}">
    </div>

    <div class="form-group col-md-6">
      <label for="foto">Foto URL</label>
      <input type="text" class="form-control" id="foto" name="foto" value="{{ $item->foto }}">
    </div>
    
    @if($item->foto)
    <div class="col-md-6">
      <a href="{{ $item->foto }}" target="_blank">
        <img src="{{ $item->foto }}" alt="{{ $item->tiulo }}" class="img-rounded small edit">
      </a>
    </div>
    @endif

    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">{{ $acao }} livro</button>
      <a class="btn btn-warning" href="{{ route('livros.index') }}" role="button">Cancelar</a>
    </div>

    <input type="hidden" name="_method" value="{{ $_method }}">

  </form>
</div>
@endsection