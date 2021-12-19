@extends('layouts.app')
@section('content')
<form action="{{url('/candidatos')}}" method="post">
    @csrf {{-- <- Required for protection or the form is rejected --}}
    Nome: <input type="text" name="Nome" value="{{old('Nome')}}">
    Sobrenome: <input type="text" name="Sobrenome" value="{{old('Sobrenome')}}">
    Cargo: <input type="text" name="Cargo" value="{{old('Cargo')}}">
    Anos de Experiencia: <input type="number" name="AnosExperiencia" value="{{old('AnosExperiencia')}}">
    <button type="submit" class="btn btn-primary">Create</button>
</form>
@endsection