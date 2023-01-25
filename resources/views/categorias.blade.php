<x-layout title="COMEX"  listagem="{{ $listagem }}">
  <form method="POST" action="/categorias/store">
    @csrf
      <h4>{{ $legenda }}</h4>
      <p><div> 
      <div style="width:300px;float:left;">
        <input type="text" name="nome" placeholder="Digite a categoria">
      </div> 
      <div style="width:200px;float:left;">
        <button type="submit" style="width:100px">Adicionar</button> 
      </div> 
      </div><br></p>     
  </form>
  @if( isset( $listagem ) )
    <div><hr>
        @foreach($listagem as $item)
        <p><div> 
          <div style="width:300px;float:left;">
            <form method="POST" action="/categorias/update">
            @csrf  
              <input type="text" name="nome" style="border:none;" value="{!! $item->nome !!}">
              <input type="hidden" name="id" value="{{ $item->id }}">
              <button type="submit" style="width:100px">Salvar</button> 
            </form>
          </div>
          
          <div style="width:200px;float:left;">  
              <form method="POST" action="/categorias/delete">
                @csrf
                <input type="hidden" name="id" value="{{ $item->id }}">
                <button type="submit" style="width:100px">Remover</button>
             </form>
          </div>     
        </div><br></p>     
        @endforeach
    </div>
    @endif
</x-layout>
