@extends('layout.app')

@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="{{ route('categorias.index') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nomeCategoria">Nome da Categoria</label>
                    <input class="form-control" type="text" name="nome" id="nomeCategoria" placeholder="Categoria">
                </div>
                <button class="btn btn-primary mt-2">Cadastrar</button>
                <button class="btn btn-danger mt-2">Cancelar</button>
            </form>
        </div>
    </div>
@endsection