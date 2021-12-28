<?php

namespace Database\Factories;

use App\Models\Candidato;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

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
        $nomes=array('Ana','Bruno','Catarina','Diogo','Eliza','Feliciano','Gabriela','Henrique','Iasmin','Jerónimo','Leonor','Matheus','Natacha','Oscár','Patrícia','Rui','Sara','Tiago','Ursula','Valdemar');
        $sexo=array('Masculino', 'Feminino', 'Outro');
        // randomiza um nome $n e uma key $nz
        $nz=rand(1,20);
        $n=$nomes[$nz-1];
        // se for um nome feminino s=1 se nao s=0
        if($nz%2==0)$s=0;else $s=1;
        // 1 em cada 10 é outro
        $r1=rand(1,10);
        if($r1==10)$s=2;
        // s como o sexo
        $s=$sexo[$s];
        //define uma imagem entre 3 randoms
        $r2=rand(1,3);
        switch($s){
            case 'Feminino':  $i = 'F'.$r2.'.jpg'; break;
            case 'Masculino': $i = 'M'.$r2.'.jpg'; break;
            case 'Outro':     $i = 'A'.$r2.'.jpg'; break; 
        }
        return [
            'Nome' => $n,
            'Sobrenome' => Arr::random(array('Silva','Santos','Ferreira','Pereira','Oliveira','Costa','Moreira','Gomes','Pinto','Marques','Cunha')),
            'Cargo' => Arr::random(array('Designer','Cozinheiro','Audio Fixer','Produtor Audio-Visual','Engenheiro Software')),
            'AnosExperiencia' => rand(0,25),
            'Sexo' => $s,
            'Email' => Str::random(10).'@topstops.com',
            'Password' => '$2y$10$LDfGp9zDHK4ODUqdEoTOR.kLSIRzrTA4Yi43UWcylYoUKzGIwOJ0e',             
            'Default' => 1,
            'Imagem' => $i,
        ];
    }
}
