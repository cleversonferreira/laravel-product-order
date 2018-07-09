<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Pedidos</title>
</head>
<body>

    <h1>Todos Pedidos</h1>
    <a href="{{route('create.order')}}">Novo Pedido</a>
    <hr>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Data</th>
                <th>Items</th>
                <th>Total</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <th>{{$order->id}}</th>
                    <th>{{$order->created_at}}</th>
                    <th>{{$order->items}}</th>
                    <th>{{$order->total}}</th>
                    <th>
                        <a href="{{"/pedidos/{$order->id}/excluir"}}">excluir</a>
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>