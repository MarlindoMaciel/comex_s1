<x-principal title="COMEX">
<x-layout title="Modificar Categoria" >
  <form method="POST" action="/categorias/update">
    @csrf
      <span>Categoria</span><br>
      <input type="hidden" name="id" value="{{ $categoria->id }}"><br>
      <input type="text" name="nome" value="{{ $categoria->nome }}"><br>
      <button type="submit">Atualizar</button>
  </form>
</x-layout>
</x-principal>
