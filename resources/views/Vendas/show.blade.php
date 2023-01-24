<x-principal title="COMEX">
<x-layout title="Lista de Vendas">
<ul>
  @foreach($vendas as $venda)
     <li>{{ $venda->nome }} <a href="/vendas/edit?id={{ $venda->id }}">Editar</a></li>
  @endforeach
</ul>
</x-layout>
</x-principal>
