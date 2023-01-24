<x-principal title="COMEX">
  <x-layout title="Lista de Categorias">
  <ul>
    @foreach($categorias as $categoria)
     <li>{{ $categoria->nome }}</li>
    @endforeach
  </ul>
  </x-layout>
</x-principal>
