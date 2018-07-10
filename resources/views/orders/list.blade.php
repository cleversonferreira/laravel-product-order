@extends('templates.template')
@section('content')

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Todos Pedidos</h1>
        </div>
    </section>

    <div class="container">

        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Data</th>
                <th scope="col">Items</th>
                <th scope="col">Total</th>
                <th scope="col">Ação</th>
            </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->created_at}}</td>
                        <td>{{$order->items}}</td>
                        <td>{{$order->total}}</td>
                        <td>
                            <a href="{{"/pedidos/{$order->id}/excluir"}}">excluir</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection