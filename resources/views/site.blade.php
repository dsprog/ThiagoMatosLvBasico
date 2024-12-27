<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Lockscreen</title>
    @vite('resources/scss/app.scss')
</head>

<body class="hold-transition lockscreen">
    <div class="lockscreen-wrapper">
        @auth
        <div class="lockscreen-logo">
            <a href="{{ route('home') }}"><b>Admin</b>LTE</a>
        </div>
        <div class="lockscreen-name">Olá {{ Auth::user()->name }}, você já esta logado!</div>
        <div class="lockscreen-item" style="margin: 50px auto; width: 235px;">
            <div class="lockscreen-image"> <img src="{{ Vite::asset('resources/img/user2-160x160.jpg') }}" alt="User Image"> </div>
            <form class="lockscreen-credentials">
                <a href="{{ route('home') }}" class="btn btn-block btn-outline-dark btn-md" style="padding: 2px 10px 5px 10px;border: 1px solid #e7e4e4;">
                    acessar o sistema<i class="bi bi-box-arrow-in-right"></i>
                </a>
            </form>
        </div>
        <div class="lockscreen-footer text-center">
            Copyright &copy; 2014-2021 <b><a href="https://adminlte.io" class="text-black">AdminLTE.io</a></b><br>
            All rights reserved
        </div>
        @else
        <div class="lockscreen-logo">
            <a href="{{ route('home') }}"><b>Admin</b>LTE</a>
        </div>
        <div class="help-block text-center">
            Você não esta logado!
        </div>
        <div class="text-center my-3">
            <a href="{{ route('login') }}" class="btn btn-primary">
                <i class="bi bi-person"></i>
                Faça o login
                <i class="bi bi-box-arrow-in-right"></i>
            </a>
        </div>
        <div class="lockscreen-footer text-center">
            Copyright &copy; 2014-2021 <b><a href="https://adminlte.io" class="text-black">AdminLTE.io</a></b><br>
            All rights reserved
        </div>

        @endauth

    </div>
    @vite('resources/js/app.js')
</body>

</html>
