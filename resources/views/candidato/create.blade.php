@extends('layouts.app')
@section('content')
<form action="{{url('/candidatos')}}" method="post">
@csrf {{-- <- Required for protection or the form is rejected --}}
    <table style='margin-left:auto; margin-right:auto;'>
        <tr>
            <td>Nome:</td><td><input type="text" name="Nome" value="{{old('Nome')}}"></td>
        </tr>
        <tr>
            <td>Sobrenome:</td><td><input type="text" name="Sobrenome" value="{{old('Sobrenome')}}"></td>
        </tr>
        <tr>
            <td>Cargo:</td><td><input type="text" name="Cargo" value="{{old('Cargo')}}"></td>
        </tr>
        <tr>
            <td>Anos de Experiencia:</td><td><input type="number" name="AnosExperiencia" value="{{old('AnosExperiencia')}}"></td>
        </tr>  
    </table>
    <div style="text-align: center;">
        <br><button type="submit" class="btn btn-primary">Create</button>
    </div>
</form>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@endsection