<x-layout>
    <x-menulateral>
      @if( isset( $categorias ) )
          @foreach($categorias as $categoria)
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ url('/') }}/?id={{ $categoria->id }}">{{ ucfirst( mb_strtolower($categoria->nome) ) }}</a></li>
          @endforeach
      @endif
      <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ url('/') }}">Todos os produtos</a></li>
      <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ url('/') }}/?id=-1">Os + vendidos</a></li>
      <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ url('/') }}/?id=-2">Os + recentes</a></li>
    </x-menulateral>

    <x-galeria>
    <div class="galeria">
    @if( isset( $produtos ) )
        @foreach($produtos as $produto)
            <div class="box"><center>
            <img src="{{ asset('/imagens/') }}/carrinho.png" class="carrinho" onclick="adicionar({{ $produto->id }})">
                <a data-fancybox="gallery" href="{{ asset('/imagens/') }}/{{ $produto->imagem }}" data-caption="<h1>{{ $produto->nome }}</h1>{{ $produto->descricao }}<div class='valor'>R$ {{ $produto->valor_unitario }}</div>">
                   <img class="imagem" src="{{ asset('/imagens/') }}/{{ $produto->miniatura }}">
                </a></center>
                {{ $produto->nome }}<br>
              <span class="valor">R$ {{ number_format( str_replace(',','.',$produto->valor_unitario), 2, ',', '.') }}</span>
              <center><span><small><small><small><small>{{ $produto->vendidos }} Unidades vendidas</small></small></small></small></span></center>
            </div>
        @endforeach
    @endif
  </div>
    </x-galeria>
</x-layout>
