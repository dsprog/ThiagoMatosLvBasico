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

<body class="register-page bg-body-secondary">
    <div class="register-box">
        <div class="register-logo"> <a href="#"><b>Admin</b>LTE</a> </div> <!-- /.register-logo -->
        <div class="card">
            <div class="card-body register-card-body">
                <p class="register-box-msg">Cadastro de usuário</p>
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <div class="input-group-text"> <span class="bi bi-person"></span> </div>
                        <input type="text" name="name" placeholder="Nome"
                        value="{{ old('name') }}" autofocus
                        class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-text"> <span class="bi bi-envelope"></span> </div>
                        <input type="email" name="email"
                        class="form-control @error('email') is-invalid @enderror"
                        value="{{ old('email') }}" placeholder="Email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text"> <span class="bi bi-lock-fill"></span> </div>
                        <input type="password" name="password"
                        class="form-control @error('password') is-invalid @enderror" placeholder="Senha">
                        <div class="input-group-text"> <span class="bi bi-eye-fill show-password"></span> </div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> <!--begin::Row-->
                    <div class="input-group mb-3">
                        <div class="input-group-text"> <span class="bi bi-lock-fill"></span> </div>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmar Senha">
                        <div class="input-group-text"> <span class="bi bi-eye-fill show-password"></span> </div>
                        @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> <!--begin::Row-->
                    <div class="row">
                        <div class="col-8">
                            <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Eu concordo com os <a href="#">termos</a> </label>
                            </div>
                        </div> <!-- /.col -->
                        <div class="col-4">
                            <div class="d-grid gap-2"> <button type="submit" class="btn btn-primary">Cadastrar</button> </div>
                        </div> <!-- /.col -->
                    </div> <!--end::Row-->
                </form>
                <p class="mb-0 border-top pt-3 mt-3"> <a href="{{ route('login') }}" class="text-center">
                        Eu já tenho uma assinatura</a> </p>
            </div> <!-- /.register-card-body -->
        </div>
    </div> <!-- /.register-box -->
    @vite('resources/js/app.js')
</body><!--end::Body-->

</html>
