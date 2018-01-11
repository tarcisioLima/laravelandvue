@extends('layouts.app')

@section('content')
<pagina tamanho="12">
    <painel titulo="Lista de artigos" cor="laranja">
        <breadcrumb list="{{$breadcrumbList}}"></breadcrumb>
       <tabela-lista v-bind:titulos="['#','Título', 'Descrição']"
                     v-bind:itens="[[1, 'PHP OO', 'Curso de PHP OO'], [2, 'Ruby', 'Ruby nos trilhos'], [3, 'Haskell', 'Curso de Haskell YESOD']]"
                     criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="34264343"
                     ordem="asc" ordemcol="0"></tabela-lista>
    </painel>
</pagina>
@endsection
