<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = \App\Models\User::paginate();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8'
        ]);
        \App\Models\User::create($request->all());

        return redirect()
            ->route('users.index')
            ->with('success', 'Usuário criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = \App\Models\User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = \App\Models\User::findOrFail($id)
           ->load(['perfil', 'interests']);
        $roles = \App\Models\Role::all();

        return view('users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = \App\Models\User::findOrFail($id);
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'exclude_if:password,null|min:8'
        ]);

        $user->fill($data);
        $user->save();

        return redirect()
            ->route('users.edit', $id)
            ->with('success', 'Usuário atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = \App\Models\User::findOrFail($id);
        $user->delete();
        return redirect()
            ->route('users.index')
            ->with('success', 'Usuário removido com sucesso!');
    }

    public function perfil(Request $request, string $id) {
        $user = \App\Models\User::findOrFail($id);

        $request->validate([
            'type' => 'required',
            'endereco' => 'required'
        ]);

        \App\Models\Perfil::updateOrCreate(['user_id' => $id], $request->all());

        return redirect()
            ->route('users.edit', $id)
            ->with('success', 'Perfil do usuário atualizado com sucesso!');
    }

    public function interests(Request $request, string $id) {
        $user = \App\Models\User::findOrFail($id);

        $inputs = $request->validate([
            'interests' => 'nullable|array'
        ]);

        $user->interests()->delete();
        if(!empty($inputs['interests'])){
        $user->interests()->createMany($inputs['interests']);
        }

        return redirect()
            ->route('users.edit', $id)
            ->with('success', 'Interesses do usuário atualizados com sucesso!');
    }

    public function roles(Request $request, string $id) {
        $user = \App\Models\User::findOrFail($id);

        $inputs = $request->validate([
            'roles' => 'nullable|array'
        ]);

        $user->roles()->sync($inputs['roles'] ?? []);

        return redirect()
            ->route('users.edit', $id)
            ->with('success', 'Funções do usuário atualizadas com sucesso!');
    }
}
