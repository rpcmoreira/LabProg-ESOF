@extends('layouts.app')

@section('content')

<ul class="list-group">
    @forelse($candidato as $candidatos)
    <li class="list-group-item">
        <h5>{{$candidato->id}} - {{$candidato->firstName}} - {{$candidato->lastName}} </h5>
    </li>
    @empty
    <h5 class="text-center">Sem Candidatos!</h5>
    @endforelse
</ul>
@endsection