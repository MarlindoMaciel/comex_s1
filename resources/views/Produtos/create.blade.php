<x-principal title="COMEX">
<x-layout title="Adicionar Produtos" >
  <form method="POST" action="/produtos/store">
    @csrf
      <span>Digite o novo Produto</span><br>
      <input type="text" name="nome"><br>
      <button type="submit">Adicionar</button>
  </form>
</x-layout>
</x-principal>
