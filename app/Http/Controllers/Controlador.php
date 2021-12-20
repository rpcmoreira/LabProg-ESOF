<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use Illuminate\Http\Request;

class Controlador extends Controller
{
    public function index(){
        return view('index');
    }

    public function teste(){
        return view('teste');
    }
}