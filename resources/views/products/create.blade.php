@extends('templates.template')

@section('content')

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Cadastrar Produto</h1>
        </div>
    </section>

    <div class="container">
        <form method="post" action="{{route('store.product')}}">
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="name">Nome</label><br>
                <input type="text" required name="name">
            </div>
            <div class="form-group">
                <label for="sku">SKU</label><br>
                <input type="text" required name="sku">
            </div>
            <div class="form-group">
                <label for="description">Descrição</label><br>
                <input type="text" required name="description">
            </div>
            <div class="form-group">
                <label for="price">Preço</label><br>
                <input type="text" required name="price">
            </div>
            <button class="btn btn-dark" type="submit">Cadastrar</button>
    </form>
    </div>
@endsection