<x-layout>
    <x-galeria>
    @if( isset( $produtos ) )
        @foreach($produtos as $produto)
            <div class="box">
                <a data-fancybox="gallery" href="{{ asset('/imagens/') }}/{{ $produto->arquivo }}" data-caption="<h1>{{ $produto->nome }}</h1>{{ $produto->descricao }}<div class='valor'>R$ {{ $produto->preco_unitario }}</div>">

                    <img class="imagem" src="{{ asset('/imagens/') }}/{{ $produto->arquivo }}">
                </a>
            </div>
        @endforeach
    @endif
    </x-galeria>
</x-layout>
<x-animacao title="{{ session('titulo') }}">
    @if( isset( $categorias ) )
        @foreach($categorias as $categoria)
            <a href="/" class="esverdeado">{!! $categoria->nome !!}</a>
        @endforeach
    @endif
</x-animacao>
