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
            <div class="dados">{!! $item->nome !!}</div>
            <button type="button" class="botao" onclick="document.getElementById('modal{{ $item->id }}').style.display='inherit'">Editar</button>
            <div class="modal" id="modal{{ $item->id }}">
              <form method="POST" action="/{{ $pagina }}/update">
              @csrf
                <input type="hidden" name="id" value="{{ $item->id }}">
                Produto:<br><input type="text" name="nome" class="editor" value="{!! $item->nome !!}" required="required"><br>
                Preço Unitário:<br><input type="text" name="preco_unitario" class="editor" value="{!! $item->preco_unitario !!}" required="required"><br>
                Quantidade em estoque:<br><input type="text" name="quantidade_estoque" class="editor" value="{!! $item->quantidade_estoque !!}" required="required"><br>
                Categoria:<br>
                <select name="fk_categoria" class="editor" value="{{ $item->fk_categoria }}" required="required">
                  @foreach($categorias as $categoria)
                     @if( $item->fk_categoria == $categoria->id )
                        <option value="{{ $categoria->id }}" selected>{{ $categoria->nome }}</option>
                      @else
                        <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                      @endif
                  @endforeach
                </select>
                <br>

                Descrição:<br><textarea name="descricao" class="editor" required="required">{!! $item->descricao !!}</textarea><br>
                <center><br>
                  <button type="submit" class="botao">Salvar</button>&nbsp;
                  <button type="button" class="botao" onclick="document.getElementById('modal{{ $item->id }}').style.display='none'">Fechar</button>
                </center>
              </form>
            </div>
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
