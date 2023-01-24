<x-principal title="COMEX">
<x-layout title="Remover Categorias">
  <form method="POST" action="/categorias/delete">
    @csrf
    <ul>
    @foreach($categorias as $categoria)
       <li><input type="checkbox" name="categorias[]" value="{{ $categoria->id }}">&nbsp;{{ $categoria->nome }}</li>
    @endforeach
    </ul>
    <button type="submit">Remover</button>
  </form>
</x-layout>
</x-principal>
