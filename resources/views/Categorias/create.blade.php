<x-principal title="COMEX">
<x-layout title="Adicionar Categorias" >
  <form method="POST" action="/categorias/store">
    @csrf
      <span>Digite a nova categoria</span><br>
      <input type="text" name="nome"><br>
      <button type="submit">Adicionar</button>
  </form>
</x-layout>
</x-principal>
