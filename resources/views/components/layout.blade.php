<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>{{ env('APP_NAME').' '.env('APP_VERSION') }}</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <style>
     body{
          background: -webkit-gradient(linear, left top, right top, from(#fff), to(#ddd)) repeat;
          background: -moz-linear-gradient(left, #808080, #363636);
          filter:progid:DXImageTransform.Microsoft.Gradient(GradientType=1, StartColorStr='#808080', EndColorStr='#363636');
        }
     .logo{
          background: -webkit-gradient(linear, left top, right top, from(#55526f), to(#423f60)) repeat;
          background: -moz-linear-gradient(left, #55526f, #423f60);
          filter:progid:DXImageTransform.Microsoft.Gradient(GradientType=1, StartColorStr='#55526f', EndColorStr='#423f60');
        }
      .carrinho{
        float:right;
        width:32px;
        height:32px;
      }  
      .dados{
         min-width: 300px;
         float: left;
         margin-left:3px;
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
      .conteudo{
         padding:10px;
      }
    </style>
  </head>
  <body>
    @if (session('mensagem') ) 
      <div class="alert alert-primary message" id="message" role="alert">
        {{ session('mensagem') }}
      </div>
    @endif

    <div class="logo"><img src="{{ asset('/imagens/') }}/comex.png"></div>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link" aria-current="page" href="/">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/') }}/pedidos">Pedidos</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/') }}/clientes">Clientes</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/') }}/produtos">Produtos</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/') }}/categorias">Categorias</a></li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <br>
    <div class="conteudo">
       {{ $slot }}
    </div>
    <script>
      onload=apagar();
      var lista = new Array();
      function adicionar(id){
         lista.push(id);
         message.innerHTML='Produto adicionado a sua lista de compras.';
         apagar();
      }
      function apagar(){
        setTimeout(function(){message.style.display='none';},3000);
      }
    </script>
  </body>
</html>
