<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>


<header>
    <div class="bg-dark collapse" id="navbarHeader" style="">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white">Produtos</h4>
                    <ul class="list-unstyled">
                        <li><a href="/produtos" class="text-white">Todos</a></li>
                        <li><a href="/produtos/cadastrar" class="text-white">Cadastrar Novo</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white">Pedidos</h4>
                    <ul class="list-unstyled">
                        <li><a href="/pedidos" class="text-white">Todos</a></li>
                        <li><a href="/pedidos/novo" class="text-white">Novo Pedido</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</header>

<main role="main">