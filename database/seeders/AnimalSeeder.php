<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Animal;

class AnimalSeeder extends Seeder
{
    public function run(): void
    {
        Animal::create([
            'nome' => 'Rex',
            'especie' => 'Cachorro',
            'raca' => 'SRD',
            'idade' => '3 anos',
            'descricao' => 'Muito dócil e brincalhão.',
            'contato' => '(63) 99999-9999',
            'status' => 'Disponível'
        ]);

        Animal::create([
            'nome' => 'Luna',
            'especie' => 'Gato',
            'raca' => 'Persa',
            'idade' => '2 anos',
            'descricao' => 'Muito carinhosa.',
            'contato' => '(63) 99999-8888',
            'status' => 'Disponível'
        ]);
    }
}