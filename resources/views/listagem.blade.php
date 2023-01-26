<x-layout>
  <form method="POST" action="/{{ $pagina }}/store">
    @csrf
      <h4>{{ $legenda }}</h4>
      <p><div>
      <div class="dados">
        <input type="text" name="nome" placeholder="Digite um item {{ $pagina }}" required="required">
      </div>
      <div class="dados">
        <button type="submit" class="botao">Adicionar</button>
      </div>
      </div><br></p>
  </form>
  @if( isset( $listagem ) )
    <div><hr>
        @foreach($listagem as $item)
        <p><div>
          <div class="dados">
            <form method="POST" action="/{{ $pagina }}/update">
            @csrf
              <input type="text" name="nome" class="editor" value="{!! $item->nome !!}" required="required">
              <input type="hidden" name="id" value="{{ $item->id }}">
              <button type="submit" class="botao">Salvar</button>
            </form>
          </div>

          <div class="dados">
              <form method="POST" action="/{{ $pagina }}/delete">
                @csrf
                <input type="hidden" name="id" value="{{ $item->id }}">
                <button type="submit" class="botao">Remover</button>
             </form>
          </div>
        </div><br></p>
        @endforeach
    </div>
    @endif
</x-layout>
