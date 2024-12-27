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
