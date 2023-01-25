<x-layout title="COMEX">
    <x-animacao>
        @if( isset( $listagem ) )
            @foreach($listagem as $item)
                <a href="/" class="esverdeado">{!! $item->nome !!}</a>
            @endforeach
        @endif
    </x-animacao>
</x-layout>
