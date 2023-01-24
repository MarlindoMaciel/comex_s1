<x-principal title="COMEX">
<x-layout title="Remover Clientes">
  <form method="POST" action="/clientes/delete">
    @csrf
    <ul>
    @foreach($clientes as $cliente)
       <li><input type="checkbox" name="clientes[]" value="{{ $cliente->id }}">&nbsp;{{ $cliente->nome }}</li>
    @endforeach
    </ul>
    <button type="submit">Remover</button>
  </form>
</x-layout>
</x-principal>
