<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" alt="Logo" width="156" height="50">
            </a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="#">Блог</a>
                    <a class="nav-link" href="#">Как заказать</a>
                    <a class="nav-link" href="#">Возврат</a>
                    <a class="nav-link" href="#">Акции</a>
                    <a class="nav-link" href="#">Дилерам</a>
                    <a class="nav-link" href="#">Где купить</a>
                </div>
            </div>
            <form class="d-flex" role="search">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ваш город: Волгоград</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">8 800 505-75-77</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">gs@grass.su</a>
                    </li>
                </ul>
            </form>
        </div>
    </nav>
    <div class="row">
        <div class="col-2">
            <div class="dropdown">
                <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Каталог товаров
                </button>
            </div>
        </div>
        <div class="col-6">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Искать на Grass" aria-label="Search">
                <button type="button" class="btn btn-success">Q</button>
            </form>
        </div>

        <div class="col-2 login">
            <img src="img/login.png" alt="login">
            <a>Вход и регистрация</a>
        </div>
        <div class="col-2 dump">
            <img src="img/dump.png" alt="dump">
            <a>Корзина пуста</a>
        </div>
    </div>
</div>
