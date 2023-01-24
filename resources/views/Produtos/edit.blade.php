<x-principal title="COMEX">
<x-layout title="Modificar Produtos" >
  <form method="POST" action="/produtos/update">
    @csrf
      <span>Produto</span><br>
      <input type="hidden" name="id" value="{{ $produto->id }}"><br>
      <input type="text" name="nome" value="{{ $produto->nome }}"><br>
      <button type="submit">Atualizar</button>
  </form>
</x-layout>
</x-principal>
