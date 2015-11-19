<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>
    @section("titulo")
    Code Education
    @show
  </title>

  <!-- Bootstrap -->
  <link href="{{ asset('assets/css/libs.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>

    <div class="container">

      @include('partial.nav')
      
      @yield('conteudo')

    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.4/handlebars.min.js"></script>
    <script src="https://js.pusher.com/3.0/pusher.min.js"></script>
    <script src="{{ asset('assets/js/libs.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script id="item-autor" type="text/x-handlebars-template">
      <tr style="display:none" class="new-author">
        <td>@{{ item.id }}</td>
        <td>@{{ item.nome }}</td>
        <td>@{{ item.email }}</td>
        <td>@{{ item.telefone }}</td>
        <td>@{{ item.created_at }}</td>
        <td>
          <a href="autores/@{{ item.id }}/edit" class="btn btn-default control-index" aria-label="Ler">
            <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
          </a>
          <form action="autores/@{{ item.id }}" method="post" class="control-index">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="delete">
            <button type="submit" href="" class="btn btn-danger" aria-label="Remover">
              <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>
            </button>
          </form>
        </td>
      </tr>
    </script>

  </body>
  </html>