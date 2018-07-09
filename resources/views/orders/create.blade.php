<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Novo Pedido</title>
</head>
<body>

    <h1>Novo Pedido</h1>
    <a href="{{route('list.products')}}">Listagem de Pedidos</a>
    <hr>

    <form method="post" action="{{route('store.order')}}">
        {!! csrf_field() !!}
        <input type="text" required placeholder="Items" name="items">
        <input type="text" required placeholder="Total" name="total">
        <button type="submit">Cadastrar</button>
    </form>

</body>
</html>