<x-principal title="COMEX">
<x-layout title="Remover Produtos">
  <form method="POST" action="/produtos/delete">
    @csrf
    <ul>
    @foreach($produtos as $produto)
       <li><input type="checkbox" name="produtos[]" value="{{ $produto->id }}">&nbsp;{{ $produto->nome }}</li>
    @endforeach
    </ul>
    <button type="submit">Remover</button>
  </form>
</x-layout>
</x-principal>
