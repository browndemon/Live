@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="{{url('/atualizar/'.$id->id)}}">

            @csrf

            <div class="form-group">
                <input type="text" class="form-control" name="nome" placeholder="Nome do produto">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="marca" placeholder="Marca">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="valor" placeholder="Valor">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="quantidade" placeholder="Quantidade">
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
@endsection