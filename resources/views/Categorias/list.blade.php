<x-layout title="Categorias - Deletar">
  <form method="POST" action="/categorias/delete">
    @csrf
    <ul>
    @foreach($categorias as $categoria)
       <li><input type="checkbox" name="categorias[]" value="{{ $categoria->id }}">&nbsp;{{ $categoria->categoria }}</li>
    @endforeach
    </ul>
    <button type="submit">Remover</button>
  </form>
</x-layout>
