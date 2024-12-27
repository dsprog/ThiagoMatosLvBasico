<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $fillable = ['user_id', 'type', 'endereco'];
    public function user() {
        return $this->belongsTo(\App\Models\User::class);
    }
}
