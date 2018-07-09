<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Produtos</title>
</head>
<body>

    <h1>Cadastrar Produto</h1>
    <a href="{{route('list.products')}}">Listagem de Produtos</a>
    <hr>

    <form method="post" action="{{route('store.product')}}">
        {!! csrf_field() !!}
        <input type="text" required placeholder="Nome" name="name">
        <input type="text" required placeholder="SKU" name="sku">
        <input type="text" required placeholder="Descrição" name="description">
        <input type="text" required placeholder="Preço" name="price">
        <button type="submit">Cadastrar</button>
    </form>

</body>
</html>