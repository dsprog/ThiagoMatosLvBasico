<form action="{{ route('users.roles', $user->id) }}" method="POST">
    @csrf
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Cargos</h3>
        </div>
        <div class="card-body">
            @foreach ($roles as $role)
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="{{ $role->id }}"
                id="flexCheckChecked-{{ $role->id }}"
                name="roles[]"
                @error('roles') is-invalid @enderror
                @checked(in_array($role->name, $user->roles->pluck('name')->toArray()))
                >
                <label class="form-check-label" for="flexCheckChecked-{{ $role->id }}">
                  {{ $role->name }}
                </label>
              </div>
              @if ($loop->last)

              @error('roles')
              <span class="text-danger">{{ $message }}</span>
          @enderror
    </div>
              @endif
            @endforeach
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary mt-2">Salvar</button>
        </div>

    </div>
</form>
