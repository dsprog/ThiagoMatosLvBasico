<form action="{{ route('users.interests', $user->id) }}" method="POST">
    @csrf
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Interesses</h3>
        </div>
        <div class="card-body">
            @foreach (['Futebol', 'Formula 1'] as $interest)
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="{{ $interest }}"
                id="flexCheckChecked-{{ $loop->index }}"
                name="interests[][name]"
                @error('interests') is-invalid @enderror
                @checked(in_array($interest, $user->interests->pluck('name')->toArray()))
                >
                <label class="form-check-label" for="flexCheckChecked-{{ $loop->index }}">
                  {{ $interest }}
                </label>
              </div>
              @if ($loop->last)

              @error('interests')
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
