<x-principal title="COMEX">
<x-layout title="Lista de Produtos">
<ul>
  @foreach($produtos as $produto)
     <li>{{ $produto->nome }} <a href="/produtos/edit?id={{ $produto->id }}">Editar</a></li>
  @endforeach
</ul>
</x-layout>
</x-principal>
