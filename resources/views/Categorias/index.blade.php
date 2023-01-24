<x-layout title="Categorias">
<ul>
  @foreach($categorias as $categoria)
     <li>{{ $categoria->categoria }}</li>
  @endforeach
</ul>
</x-layout>
