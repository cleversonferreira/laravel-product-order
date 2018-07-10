@extends('templates.template')

@section('content')

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Editar Produto</h1>
        </div>
    </section>

    <div class="container">
        <form method="post" action="{{route('update.product', ['id' => $product->id])}}">
            {{method_field('PUT')}}
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="name">Nome</label><br>
                <input type="text" placeholder="Nome" name="name" value="{{$product->name}}">
            </div>
            <div class="form-group">
                <label for="sku">SKU</label><br>
                <input type="text" placeholder="SKU" name="sku" value="{{$product->sku}}">
            </div>
            <div class="form-group">
                <label for="description">Descrição</label><br>
                <input type="text" placeholder="Descrição" name="description" value="{{$product->description}}">
            </div>
            <div class="form-group">
                <label for="price">Preço</label><br>
                <input type="text" placeholder="Preço" name="price" value="{{$product->price}}">
            </div>
            <button class="btn btn-dark" type="submit">Cadastrar</button>
        </form>
    </div>

@endsection