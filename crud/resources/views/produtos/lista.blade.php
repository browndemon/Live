@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Marca</th>
                <th scope="col">Valor</th>
                <th scope="col">Quantidade</th>
                <th scope="col"></th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>
                @foreach($produto as $produtos)
                    <tr>
                        <th scope="row">{{$produtos->id}}</th>
                        <td>{{$produtos->nome}}</td>
                        <td>{{$produtos->marca}}</td>
                        <td>{{'R$ '.number_format($produtos->valor, 2, ',', '.')}}</td>
                        <td>{{$produtos->quantidade}}</td>
                        <td><a href="{{url('/produto/atualizar/'.$produtos->id)}}">Editar</a></td>
                        <td><a href="{{url('/deletar/'.$produtos->id)}}">Excluir</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection