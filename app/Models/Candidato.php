<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    use HasFactory;
    protected $fillable = ['Nome','Sobrenome','AnosExperiencia','Cargo','Sexo', 'Email', 'Password', 'Default', 'Imagem'];    
}