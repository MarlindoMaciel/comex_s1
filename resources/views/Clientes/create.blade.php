<x-principal title="COMEX">
<x-layout title="Adicionar Clientes" >
  <form method="POST" action="/clientes/store">
    @csrf
      <span>Digite o novo cliente</span><br>
      <input type="text" name="nome"><br>
      <button type="submit">Adicionar</button>
  </form>
</x-layout>
</x-principal>
