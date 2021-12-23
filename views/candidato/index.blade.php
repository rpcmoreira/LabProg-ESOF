@extends('layouts.app')

@section('title')
Candidatos
@endsection

@section('content')

<div style = "text-align: right" >
    <form action='{/candidato}' method='get'>
        <label for="Pagina">Por Pagina:</label>
        <select name='numero' id='' value = ''>
            <option value='6'>6</option>
            <option value='12'>12</option>
        </select>
        <input type="submit" value="Alterar">  
    </form>
</div>

<!-- <ul class="list-group">
    @forelse($candidatos as $candidato)
    <li class="list-group-item">
        <h5>{{$candidato->Nome}} {{$candidato->Sobrenome}} - {{$candidato->Cargo}} - {{$candidato->AnosExperiencia}}</h5>
    </li>
    @empty
    <h5 class="text-center">Não existem Candidatos!</h5>
    @endforelse
    {!! $candidatos->links('pagination::bootstrap-4') !!}
</ul> -->

<table class="table">
    <tr>
        @for($a=0; $a < 4; $a++)
            <td>
                @forelse($candidatos as $candidato)
                <table> 
                    <tr>
                        <td>
                            <img src="{{URL::asset('/img/stock.jpg')}}" alt="logo" height="200" width="200">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>{{$candidato->Nome}} {{$candidato->Sobrenome}}</p>
                            <p>{{$candidato->Cargo}}</p>
                            <p>{{$candidato->AnosExperiencia}}</p>
                        </td>
                    </tr>
                </table>
                @empty
                <h5 class="text-center">Não existem Candidatos!</h5>
                @endforelse
            </td>
        @endfor
    </tr>
</table>
{!! $candidatos->links('pagination::bootstrap-4') !!}
@endsection