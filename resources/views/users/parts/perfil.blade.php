<form action="{{ route('users.perfil', $user->id) }}" method="POST">
    @csrf
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Dados do Perfil</h3>
        </div>
          <div class="card-body">
            <div class="form-group mt-2">
                <label for="type">Tipo de Documento</label>
                <select id="type" name="type" class="form-control @error('type') is-invalid @enderror">
                    <option value="CPF" @isset($user->perfil->type) @if($user->perfil->type == 'CPF') selected @endif @endisset>CPF</option>
                    <option value="CNPJ" @isset($user->perfil->type) @if($user->perfil->type == 'CNPJ') selected @endif @endisset>CNPJ</option>
                </select>
                @error('type')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group mt-2">
                  <label for="endereco">Endereço</label>
                  <input text="text" class="form-control @error('endereco') is-invalid @enderror"
                  @isset($user->perfil->endereco)
                  value="{{ $user->perfil->endereco }}"
                  @endisset
                  id="endereco" name="endereco">
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
