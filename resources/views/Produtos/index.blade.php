<x-principal title="COMEX">
  <x-layout title="Lista de Produtos">
  <ul>
    @foreach($produtos as $produto)
     <li>{{ $produto->nome }}</li>
    @endforeach
  </ul>
  </x-layout>
</x-principal>
