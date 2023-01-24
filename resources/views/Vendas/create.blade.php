<x-principal title="COMEX">
<x-layout title="Adicionar Vendas" >
  <form method="POST" action="/vendas/store">
    @csrf
      <span>Digite a nova Venda</span><br>
      <input type="text" name="nome"><br>
      <button type="submit">Adicionar</button>
  </form>
</x-layout>
</x-principal>
