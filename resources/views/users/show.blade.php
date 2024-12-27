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
                <p><a href="{{ route('users.index') }}" class="btn btn-primary btn-sm">Voltar</a></p>
            </div>
        </div>
    </div>
</div>
@endsection
