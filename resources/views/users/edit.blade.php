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
                <form action="{{ route('users.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card card-primary">
                        <div class="card-header">
                          <h3 class="card-title">Dados do Usuário</h3>
                        </div>
                          <div class="card-body">
                            <div class="form-group mt-2">
                                <label for="nome">Nome</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $user->name }}" id="nome" name="name">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                              <div class="form-group mt-2">
                                <label for="email">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ $user->email }}" name="email">
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
                      </div>
                  </form>
            </div>
            <div class="col-lg-6 col-12">
                <form action="{{ route('users.perfil', $user->id) }}" method="POST">
                    @csrf
                    <div class="card card-primary">
                        <div class="card-header">
                          <h3 class="card-title">Dados do Perfil</h3>
                        </div>
                          <div class="card-body">
                            <div class="form-group mt-2">
                                <label for="type">Tipo</label>
                                <input text="text" class="form-control @error('type') is-invalid @enderror" value="{{ $user->perfil->type }}" id="type" name="type">
                                @error('type')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                              <div class="form-group mt-2">
                                  <label for="endereco">Endereço</label>
                                  <input text="text" class="form-control @error('endereco') is-invalid @enderror" value="{{ $user->perfil->endereco }}" id="endereco" name="endereco">
                                  @error('endereco')
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                            </div>
                          </div>
                          <div class="card-footer">
                            <button type="submit" class="btn btn-primary mt-2">Salvar</button>
                          </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
