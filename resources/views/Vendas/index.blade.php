<x-principal title="COMEX">
  <x-layout title="Lista de Vendas">
  <ul>
    @foreach($vendas as $venda)
     <li>{{ $venda->nome }}</li>
    @endforeach
  </ul>
  </x-layout>
</x-principal>
