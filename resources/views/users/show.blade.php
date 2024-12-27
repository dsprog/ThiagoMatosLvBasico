@extends('layouts.admin')
@section('page_title', 'Visualizar Usuário')
@section('actions')
    <a href="{{ route('users.index') }}" class="btn btn-primary">Voltar</a>
@endsection
@section('content')

<div class="app-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-12">
                <p><strong>Nome:</strong> {{ $user->name }} <br>
                <strong>E-mail:</strong> {{ $user->email }}</p>

                @if($user->perfil)
                <p><strong>Tipo de Documento:</strong> {{ $user->perfil->type }} <br>
                    <strong>Endereço:</strong> {{ $user->perfil->endereco }}</p>
                @endif


                <p><a href="{{ route('users.index') }}" class="btn btn-primary btn-sm">Voltar</a></p>
            </div>
        </div>
    </div>
</div>
@endsection
