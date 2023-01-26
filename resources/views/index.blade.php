<x-layout>
</x-layout>
<x-animacao title="{{ session('titulo') }}">
    @if( isset( $listagem ) )
        @foreach($listagem as $item)
            <a href="/" class="esverdeado">{!! $item->nome !!}</a>
        @endforeach
    @endif
</x-animacao>
