<x-principal title="COMEX">
<x-layout title="Lista de Categorias">
<ul>
  @foreach($categorias as $categoria)
     <li>{{ $categoria->nome }} <a href="/categorias/edit?id={{ $categoria->id }}">Editar</a></li>
  @endforeach
</ul>
</x-layout>
</x-principal>
