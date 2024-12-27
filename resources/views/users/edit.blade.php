@extends('layouts.admin')
@section('page_title', 'Editar Usuário')
@section('actions')
    <a href="{{ route('users.index') }}" class="btn btn-primary">Voltar</a>
@endsection
@section('content')
<div class="app-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-12">
                @include('users.parts.update')
            </div>
            <div class="col-lg-6 col-12">
                @include('users.parts.roles')
            </div>
        </div>
        <div class="row pt-4">
            <div class="col-lg-6 col-12">
                @include('users.parts.perfil')
            </div>
            <div class="col-lg-6 col-12">
                @include('users.parts.interests')
            </div>
        </div>
    </div>
</div>
@endsection
