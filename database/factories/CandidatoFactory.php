<?php

namespace Database\Factories;

use App\Models\Candidato;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class CandidatoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Candidato::class;

    public function definition()
    {
        return [
            'Nome' => Arr::random(array('Ana','Bruno','Catarina','Diogo','Eliza','Feliciano','Gabriela','Henrique','Iasmin','Jerónimo','Leonor','Matheus','Natacha','Oscár','Patrícia','Rui','Sara','Tiago','Ursula','Valdemar')),
            'Sobrenome' => Arr::random(array('Silva','Santos','Ferreira','Pereira','Oliveira','Costa','Moreira','Gomes','Pinto','Marques','Cunha')),
            'Cargo' => Arr::random(array('Designer','Cozinheiro','Audio Fixer','Produtor Audio-Visual','Engenheiro Software')),
            'AnosExperiencia' => rand(0,25),
        ];
    }
}
