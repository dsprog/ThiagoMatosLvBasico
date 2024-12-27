<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> <!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>AdminLTE 4 | Register Page</title><!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="AdminLTE 4 | Register Page">
    <meta name="author" content="ColorlibHQ">
    <meta name="description" content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS.">
    <meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard">
    @vite('resources/scss/app.scss')
</head> <!--end::Head--> <!--begin::Body-->

<body class="login-page bg-body-secondary">
    <div class="login-box">
        <div class="login-logo"> <a href="{{ route('home') }}"><b>Admin</b>LTE</a> </div> <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Login</p>
                @if (session('status'))
                <div class="text-success border-start border-3 border-success bg-success-subtle p-2">
                    {{ session('status') }}
                </div>
                @endif
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <div class="input-group-text"> <span class="bi bi-envelope"></span> </div>
                        <input type="email" placeholder="Email" name="email" value="{{ old('email') }}"
                            autofocus class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text"> <span class="bi bi-lock-fill"></span> </div>
                        <input type="password" placeholder="Senha" name="password"
                            class="form-control @error('password') is-invalid @enderror">
                        <div class="input-group-text"> <span class="bi bi-eye-fill show-password"></span> </div>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div> <!--begin::Row-->
                    <div class="row">
                        <div class="col-12">
                            <div class="d-grid gap-2"> <button type="submit" class="btn btn-primary">Entrar</button> </div>
                        </div> <!-- /.col -->
                    </div> <!--end::Row-->
                </form><!-- /.social-auth-links -->
                <div class="border-top pt-3 mt-3 d-flex justify-content-between">
                    <a href="{{ route('password.request') }}" class="link-secondary">Recuperar Senha</a>
                    <a href="{{ route('register') }}" class="link-primary">Cadastre-se</a>
                </div> <!-- /.login-card-body -->
            </div>
        </div> <!-- /.login-box -->
        @vite('resources/js/app.js')
</body><!--end::Body-->

</html>
