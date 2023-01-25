<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>{{ $title }}</title>
    <style>
      .message{
        background-color: yellow; 
        fonte-color:white;
        font-size: 8pt;
        float:left;
      }
    </style>
  </head>
  <body>
    <div class="menu">
    <a href="{{ url('/') }}"            >Home</a>&nbsp;
    <a href="{{ url('/') }}/pedidos"    >Pedidos</a>&nbsp;
    <a href="{{ url('/') }}/clientes"   >Clientes</a>&nbsp;
    <a href="{{ url('/') }}/produtos"   >Produtos</a>&nbsp;
    <a href="{{ url('/') }}/categorias" >Categorias</a>&nbsp;
    </div>
    <div id='message' class="message">@if (session('mensagem') ) {{ session('mensagem') }} @endif</div>
    {{ $slot }}
    <script>
      onload=setTimeout(function(){message.innerHTML='';},3000);
    </script>  
  </body>
</html>

