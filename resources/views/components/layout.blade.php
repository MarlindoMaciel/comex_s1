<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>COMEX v1.0</title>
    <style>
      .message{
        background-color: yellow;
        color: blue;
        font-size: 8pt;
        float: left;
        border: solid 1px red;
        border-radius: 3px;
      }
      .menu{
         min-width: 600px;
         float: left;
      }
      .dados{
         width: 300px;
         float: left;
      }
      .botao{
        width: 80px;
        color: white;
        background-color: green;
      }
      .editor{
        min-width: 200px;
        border:none;
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
    <!-- <a href="{{ url('/') }}/listagem" >Listagem</a>&nbsp;-->
    </div>
    <br>
    <div id='message' class="message">@if (session('mensagem') ) {{ session('mensagem') }} @endif</div>
    {{ $slot }}
    <script>
      onload=setTimeout(function(){message.innerHTML='';},3000);
    </script>
  </body>
</html>
