<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Produtos</title>
</head>
<body>

    <h1>Todos Produtos</h1>
    <a href="{{route('create.product')}}">Novo Produto</a>
    <hr>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>SKU</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <th>{{$product->id}}</th>
                    <th>{{$product->sku}}</th>
                    <th>{{$product->name}}</th>
                    <th>{{$product->description}}</th>
                    <th>{{$product->price}}</th>
                    <th>
                        <a href="{{"/produtos/{$product->id}/editar"}}">editar</a>
                        <a href="{{"/produtos/{$product->id}/excluir"}}">excluir</a>
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>