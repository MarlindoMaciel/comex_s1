<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>{{ env('APP_NAME').' '.env('APP_VERSION') }}</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>   
    <style>
     body{
          background: -webkit-gradient(linear, left top, right top, from(#fff), to(#ddd)) repeat;
          background: -moz-linear-gradient(left, #808080, #363636);
          filter:progid:DXImageTransform.Microsoft.Gradient(GradientType=1, StartColorStr='#808080', EndColorStr='#363636');
        }
     .logo{
          background: -webkit-gradient(linear, left top, right top, from(#55526f), to(#423f60)) repeat;
          //background: -moz-linear-gradient(left, #808080, #363636);
          //filter:progid:DXImageTransform.Microsoft.Gradient(GradientType=1, StartColorStr='#808080', EndColorStr='#363636');
          //background-color: #555269;
        }
      .carrinho{
        float:right;
        width:32px;
        height:32px;
      }
      .message{
        background-color: yellow;
        color: blue;
        font-size: 10pt;
        float: right;
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
        border:solid 1px green;
        position:absolute;
        display:none;
        padding:10px;
        background-color: white;
      }
    </style>
  </head>
  <body>
    <div id='message' class="message">@if (session('mensagem') ) {{ session('mensagem') }} @endif</div>
    <div class="logo"><img src="{{ asset('/imagens/') }}/comex.png"></div>
    
    <div class="menu">
    <a href="{{ url('/') }}"            >Home</a>&nbsp;
    <a href="{{ url('/') }}/pedidos"    >Pedidos</a>&nbsp;
    <a href="{{ url('/') }}/clientes"   >Clientes</a>&nbsp;
    <a href="{{ url('/') }}/produtos"   >Produtos</a>&nbsp;
    <a href="{{ url('/') }}/categorias" >Categorias</a>&nbsp;
    </div>
    <br>
    {{ $slot }}
    <script>
      onload=apagar();
      var lista = new Array();
      function adicionar(id){
         lista.push(id);
         message.innerHTML='Produto adicionado a sua lista de compras.';
         apagar();
      }
      function apagar(){
        setTimeout(function(){message.innerHTML='';},3000);
      }
    </script>
  </body>
</html>
