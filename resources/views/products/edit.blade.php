<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Produtos</title>
</head>
<body>

    <h1>Editar Produto</h1>
    <a href="{{route('list.products')}}">Listagem de Produtos</a>
    <hr>

    <form method="post" action="{{route('update.product', ['id' => $product->id])}}">
        {{method_field('PUT')}}
        {!! csrf_field() !!}
        <input type="text" placeholder="Nome" name="name" value="{{$product->name}}">
        <input type="text" placeholder="SKU" name="sku" value="{{$product->sku}}">
        <input type="text" placeholder="Descrição" name="description" value="{{$product->description}}">
        <input type="text" placeholder="Preço" name="price" value="{{$product->price}}">
        <button type="submit">Cadastrar</button>
    </form>

</body>
</html>