@extends('layouts.app')

@section('content')
<pagina tamanho="12">
    <painel titulo="Lista de artigos" cor="laranja">
       <breadcrumb v-bind:list="{{$breadcrumbList}}"></breadcrumb>
        <!-- Large modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#meuModalTest">Large modal</button>

       <tabela-lista v-bind:titulos="['#','Título', 'Descrição']"
                     v-bind:itens="[[1, 'PHP OO', 'Curso de PHP OO'], [2, 'Ruby', 'Ruby nos trilhos'], [3, 'Haskell', 'Curso de Haskell YESOD']]"
                     criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="34264343"
                     ordem="asc" ordemcol="0"></tabela-lista>
    </painel>
</pagina>
<modal name="meuModalTest">
    <painel titulo="Formulario">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" id="exampleInputFile">
            <p class="help-block">Example block-level help text here.</p>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox"> Check me out
            </label>
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </painel>
</modal>
@endsection
