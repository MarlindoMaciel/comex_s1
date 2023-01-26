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
         min-width: 300px;
         float: left;
      }
      .botao{
        width: 80px;
        color: white;
        background-color: green;
      }
      .editor{
        min-width: 300px;
      }
      .modal{
        min-width: 300px;
        border:solid 1px blue;
        xfloat: left;
        position:absolute;
        xtop:30%;
        xleft:30%;
        display:none;
        padding:10px;
        background-color: white;
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
    <br>
    <div id='message' class="message">@if (session('mensagem') ) {{ session('mensagem') }} @endif</div>
    {{ $slot }}
    <script>
      onload=setTimeout(function(){message.innerHTML='';},3000);
    </script>
  </body>
</html>
