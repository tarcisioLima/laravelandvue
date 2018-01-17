@extends('layouts.app')

@section('content')
<pagina tamanho="10">
    <painel titulo="Dashboard" cor="laranja">
        <breadcrumb v-bind:list="{{$breadcrumbList}}"></breadcrumb>
        <div class="row">
            <div class="col-md-4">
                <caixa quantidade="120" titulo="Artigos" url="{{route('artigos.index')}}" cor="#547980" icone="ion ion-cube"></caixa>
            </div>
            <div class="col-md-4">
                <caixa quantidade="50" titulo="Usuários" url="#teste" cor="#45ADA8" icone="ion ion-person-stalker"></caixa>
            </div>
            <div class="col-md-4">
                <caixa quantidade="5" titulo="Autores" url="#" cor="#9DE0AD" icone="ion ion-person"></caixa>
            </div>
        </div>
    </painel>
</pagina>
@endsection
