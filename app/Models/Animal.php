<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $table = 'animais';

    protected $fillable = [
        'user_id',
        'nome',
        'especie',
        'raca',
        'idade',
        'descricao',
        'contato',
        'status'
    ];

    public function fotos()
    {
        return $this->hasMany(FotoAnimal::class);
    }
}