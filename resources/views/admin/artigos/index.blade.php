@extends('layouts.app')

@section('content')
<pagina tamanho="12">
    <painel titulo="Lista de artigos" cor="laranja">
       <breadcrumb v-bind:list="{{$breadcrumbList}}"></breadcrumb>
       <tabela-lista v-bind:titulos="['#','Título', 'Descrição']"
                     v-bind:itens="[[1, 'PHP OO', 'Curso de PHP OO'], [2, 'Ruby', 'Ruby nos trilhos'], [3, 'Haskell', 'Curso de Haskell YESOD']]"
                     criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="34264343"
                     ordem="asc" ordemcol="0"></tabela-lista>
    </painel>
    <modal-link type="button" name="meuModalTest" title="clique aqui para abrir o modal"></modal-link>
</pagina>
<modal name="meuModalTest">
    <painel titulo="Formulario">
       <formulario css="" action="" method="put" enctype="multipart/form-data" token="">
          <div class="form-group">
              <label for="descricao">Título</label>
              <input type="text" name="titulo" id="titulo" class="form-control" placeholder="título">
          </div>
          <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" name="descricao" id="descricao" class="form-control" placeholder="descrição">
          </div>
          <button class="btn btn-info">Adicionar</button>
       </formulario>
    </painel>
</modal>
@endsection
