@extends('layouts.admin')

@section('page_title', 'Lista de Usuários')

@section('actions')
    <a href="{{ route('users.create') }}" class="btn btn-primary">Novo Usuário</a>
@endsection

@section('content')

<div class="app-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Ação</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($users as $user)
                      <tr>
                        <th scope="row" style="width: 50px;">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td style="width: 100px;">
                            <a href="{{ route('users.edit', $user) }}" class="link-primary m-0 px-1 py-0"><i class="bi bi-pencil"></i></a>
                            <a href="{{ route('users.show', $user) }}" class="link-primary m-0 px-1 py-0"><i class="bi bi-eye"></i></a>
                            <form action="{{ route('users.destroy', $user) }}" method="POST" style="display: inline-block;">
                                @csrf @method('DELETE')
                                <button type="submit" class="link-danger bg-transparent border-0 m-0 px-1 py-0">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection
