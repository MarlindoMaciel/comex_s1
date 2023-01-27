<x-layout>
    <x-menulateral>
      @if( isset( $categorias ) )
          @foreach($categorias as $categoria)
              <div><a href="/?id={{ $categoria->id }}" class="itemlateral">{{ ucfirst( mb_strtolower($categoria->nome) ) }}</a></div>
          @endforeach
      @endif
      <div><a href="/" class="itemlateral">Todos os produtos</a></div>
      <div><a href="/?id=-1" class="itemlateral">Os + vendidos</a></div>
      <div><a href="/?id=-2" class="itemlateral">Os + recentes</a></div>
    </x-menulateral>
    <x-galeria>
    <div class="galeria">
    @if( isset( $produtos ) )
        @foreach($produtos as $produto)
            <div class="box"><center>
                <a data-fancybox="gallery" href="{{ asset('/imagens/') }}/{{ $produto->imagem }}" data-caption="<h1>{{ $produto->nome }}</h1>{{ $produto->descricao }}<div class='valor'>R$ {{ $produto->valor_unitario }}</div>">
                   <img class="imagem" src="{{ asset('/imagens/') }}/{{ $produto->miniatura }}">
                </a></center>
                {{ $produto->nome }}<br>
              <spam class="valor">R$ {{ number_format( str_replace(',','.',$produto->valor_unitario), 2, ',', '.') }}</span>
                <img src="{{ asset('/imagens/') }}/carrinho.png" class="carrinho" onclick="adicionar({{ $produto->id }})">
            </div>
        @endforeach
    @endif
  </div>
    </x-galeria>
</x-layout>
