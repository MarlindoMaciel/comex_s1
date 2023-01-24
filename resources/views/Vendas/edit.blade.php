<x-principal title="COMEX">
<x-layout title="Modificar Vendas" >
  <form method="POST" action="/vendas/update">
    @csrf
      <span>Venda</span><br>
      <input type="hidden" name="id" value="{{ $venda->id }}"><br>
      <input type="text" name="nome" value="{{ $venda->nome }}"><br>
      <button type="submit">Atualizar</button>
  </form>
</x-layout>
</x-principal>
