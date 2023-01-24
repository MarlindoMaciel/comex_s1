<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>{{ $title }}</title>
  </head>
  <body>
    <h1>{{ $title }}</h1>
    <a href='{{ url('/') }}/categorias/index'>Listar</a> &nbsp;
    <a href='{{ url('/') }}/categorias/create'>Adicionar</a>
    <hr>
    {{ $slot }}
  </body>
  <script>
    var mensagem = '@if( session('mensagem') != '' ) {{ session('mensagem') }} @endif';
    if( mensagem != '' ) alert(mensagem);
  </script>
</html>
