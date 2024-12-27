@extends('layouts.admin')
@section('page_title', 'Lista de Usuários')
@section('actions')
    <a href="{{ route('users.index') }}" class="btn btn-primary">Voltar</a>
@endsection
@section('content')
<div class="app-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-12">
                <form action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <div class="card card-primary">
                        <div class="card-header">
                          <h3 class="card-title">Dados do Usuário</h3>
                        </div>
                          <div class="card-body">
                      <div class="form-group mt-2">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" id="nome" name="name">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                      <div class="form-group mt-2">
                        <label for="email">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" name="email">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                      <div class="form-group mt-2">
                        <label for="password">Senha</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary mt-2">Salvar</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</div>
@endsection
