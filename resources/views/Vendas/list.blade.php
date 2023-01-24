<x-principal title="COMEX">
<x-layout title="Remover Vendas">
  <form method="POST" action="/vendas/delete">
    @csrf
    <ul>
    @foreach($vendas as $venda)
       <li><input type="checkbox" name="vendas[]" value="{{ $vendas->id }}">&nbsp;{{ $vendas->nome }}</li>
    @endforeach
    </ul>
    <button type="submit">Remover</button>
  </form>
</x-layout>
</x-principal>
