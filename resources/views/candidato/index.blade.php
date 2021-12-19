@extends('layouts.app')

@section('title')
Candidatos
@endsection

@section('content')
<ul class="list-group">
    @forelse($candidatos as $candidato)
    <li class="list-group-item">
        <h5>{{$candidato->id}} - {{$candidato->Nome}} - {{$candidato->Sobrenome}} - {{$candidato->Cargo}} - {{$candidato->AnosExperiencia}}</h5>
    </li>
    @empty
    <h5 class="text-center">Não existem Candidatos!</h5>
    @endforelse
</ul>
@endsection