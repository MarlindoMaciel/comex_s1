<x-layout title="Categorias - Adicionar" >
  <form method="POST" action="/categorias/store">
    @csrf
      <span>Adicionar nova categoria</span><br>
      <input type="text" name="categoria"><br>
      <button type="submit">Salvar</button>
  </form>
</x-layout>
