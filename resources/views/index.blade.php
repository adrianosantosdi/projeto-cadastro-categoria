@extends('layout.app')

@section('body')
<div class="row mt-5">
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                Cadastro de produtos
            </div>
            <div class="card-body">
                <h5 class="card-title">Cadastro de produtos</h5>
                <p class="card-text">Aqui você cadastra os seus produtos. Só não esqueça de cadastrar previamente as categorias</p>
                <a href="{{ route('produtos.create') }}" class="btn btn-primary">Cadastre seus produtos</a>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                Cadastro de Categoria
            </div>
            <div class="card-body">
                <h5 class="card-title">Cadastro de categoria</h5>
                <p class="card-text">Cadastre as categorias dos seus produtos</p>
                <a href="{{ route('categorias.create')}}" class="btn btn-primary">Cadastre as categorias</a>
            </div>
        </div>
    </div>
</div>
@endsection