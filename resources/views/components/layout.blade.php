<div>
    <h1>{{ $title }}</h1>
    <a href='{{ url('/') }}/categorias/index' >Listar</a>&nbsp;
    <a href='{{ url('/') }}/categorias/create'>Adicionar</a>&nbsp;
    <a href='{{ url('/') }}/categorias/show'  >Modificar</a>&nbsp;
    <a href='{{ url('/') }}/categorias/list'  >Remover</a>&nbsp;
    <hr>
    {{ $slot }}
</div>
