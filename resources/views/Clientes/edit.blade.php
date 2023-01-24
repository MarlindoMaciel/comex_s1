<x-principal title="COMEX">
<x-layout title="Modificar Cliente" >
  <form method="POST" action="/clientes/update">
    @csrf
      <span>Cliente</span><br>
      <input type="hidden" name="id" value="{{ $categoria->id }}"><br>
      <input type="text" name="nome" value="{{ $categoria->nome }}"><br>
      <button type="submit">Atualizar</button>
  </form>
</x-layout>
</x-principal>
