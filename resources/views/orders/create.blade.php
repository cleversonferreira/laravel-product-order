@extends('templates.template')

@section('content')
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Novo Pedido</h1>
        </div>
    </section>

    <div class="container">
        <h2>Selecione os Produtos</h2>
        <table class="table table-dark">
            <thead>
            <tr>
                <th>#</th>
                <th scope="col">ID</th>
                <th scope="col">SKU</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Preço</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr class="fields">
                    <th><input type="checkbox" data-item-id="{{$product->id}}" data-price="{{$product->price}}" class="product-selected" id="{{$product->id}}"></th>
                    <th>{{$product->id}}</th>
                    <th>{{$product->sku}}</th>
                    <th>{{$product->name}}</th>
                    <th>{{$product->description}}</th>
                    <th>{{$product->price}}</th>
                </tr>
            @endforeach
            </tbody>
        </table>

        <hr>

        <h4 style="text-align: right;" >Total: <strong>R$ <span id="total">00,00</span></strong></h4>

        <form style="text-align: right;" method="post" action="{{route('store.order')}}">
            {!! csrf_field() !!}
            <input type="hidden" required placeholder="Items" id="input_items" name="items">
            <input type="hidden" required placeholder="Total" id="input_total" name="total">
            <button class="btn btn-dark" type="submit">Finalizar Pedido</button>
        </form>
    </div>
@endsection