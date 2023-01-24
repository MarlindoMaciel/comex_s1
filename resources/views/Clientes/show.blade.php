<x-principal title="COMEX">
<x-layout title="Lista de Clientes">
<ul>
  @foreach($clientes as $cliente)
     <li>{{ $cliente->nome }} <a href="/clientes/edit?id={{ $cliente->id }}">Editar</a></li>
  @endforeach
</ul>
</x-layout>
</x-principal>
