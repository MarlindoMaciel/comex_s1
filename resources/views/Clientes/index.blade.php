<x-principal title="COMEX">
  <x-layout title="Lista de Clientes">
  <ul>
    @foreach($clientes as $cliente)
     <li>{{ $cliente->nome }}</li>
    @endforeach
  </ul>
  </x-layout>
</x-principal>
