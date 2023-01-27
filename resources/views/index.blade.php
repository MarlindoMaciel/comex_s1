<x-layout>
    <x-menulateral>
      @if( isset( $categorias ) )
          @foreach($categorias as $categoria)
              <div><a href="/?id={{ $categoria->id }}" class="itemlateral">{{ ucfirst( $categoria->nome ) }}</a></div>
          @endforeach
      @endif
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
              <spam class="valor">R$ {{ $produto->valor_unitario }}</span>
                <img src="{{ asset('/imagens/') }}/carrinho2.png" class="carrinho" onclick="adicionar({{ $produto->id }})">
            </div>
        @endforeach
    @endif
  </div>
    </x-galeria>

</x-layout>
