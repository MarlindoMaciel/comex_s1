<x-layout>
  <form method="POST" action="/{{ $pagina }}/store">
    @csrf
      <h4>{{ $legenda }}</h4>
      <p><div>
      <div class="dados">
        <input type="text" name="nome" placeholder="Digite um item para {{ $pagina }}" required="required">
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
            <input type="hidden" name="id" value="{{ $item->id }}">
            <div class="dados">{!! $item->nome !!}</div>
            <button type="button" class="botao" onclick="document.getElementById('modal{{ $item->id }}').style.display='inherit'">Editar</button>
            <div class="modal" id="modal{{ $item->id }}">
                Categoria:<br><input type="text" name="nome" class="editor" value="{!! $item->nome !!}" required="required"><br>
                <center><br>
                  <button type="submit" class="botao">Salvar</button>&nbsp;
                  <button type="button" class="botao" onclick="document.getElementById('modal{{ $item->id }}').style.display='none'">Fechar</button>
                </center>
            </div>
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
