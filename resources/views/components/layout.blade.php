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
      .botao{
        min-width: 90px;
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
      .mensagem{
        float:right;
      }
    </style>


        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

  </head>
  <body>
    @if (session('mensagem') ) 
      <div class="alert alert-primary mensagem" id="message" role="alert">
        {{ session('mensagem') }}
      </div>
    @endif

    <div class="logo"><img src="{{ asset('/imagens/') }}/comex.png"></div>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link" aria-current="page" href="{{ route('index') }}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('pedidos.index') }}">Meus Pedidos</a></li>
            @auth
            <li class="nav-item"><a class="nav-link" href="{{ route('clientes.index') }}">Clientes</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('produtos.index') }}">Produtos</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('categorias.index') }}">Categorias</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('testes.index') }}">Teste</a></li>
            @endauth
          </ul>

          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>&nbsp;


            @if (Route::has('login'))
              <div class="me-2">
                @auth
                  <a href="{{ url('/dashboard') }}" class="btn btn-outline-success">Minha conta</a>
                @else
                  <a href="{{ route('login') }}" class="btn btn-outline-success"><i class="fa fa-user-cicle">&nbsp;Logar</i></a>
                  @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-outline-success"><i class="fa fa-book">&nbsp;Registar-se</i></a>
                  @endif
                @endauth
                </div>
            @endif

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
