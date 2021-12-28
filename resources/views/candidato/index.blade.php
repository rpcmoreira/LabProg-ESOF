@extends('layouts.app')

@section('title')
Candidatos
@endsection

@section('content')

<!--<div style = "text-align: right" >
    <form action='' method='get'>
        <label for="Pagina">Por Pagina:</label>
        <select name='numero' id='' value = ''>
            <option value='6'>6</option>
            <option value='12'>12</option>
        </select>
        <input type="submit" value="Alterar">  
    </form>
</div>-->

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<div class="table-responsive-md">
<table class="table">
<tr>
    <?php
        for($numcand=0,$numcell=0;$numcand<count($candidatos);$numcand++,$numcell++){  
            if($numcell==4){
                echo '</tr><tr>';
                $numcell = 0;
            }
            echo '<td>';
                echo '<table>';
                echo "<tr><td><img src='img/".$candidatos[$numcand]->Imagem."' alt='logo' height='200' width='200'></td></tr>";
                echo "<tr><td class='text-center'>";
                echo $candidatos[$numcand]->Nome." ".$candidatos[$numcand]->Sobrenome."<br>";
                echo $candidatos[$numcand]->Cargo."<br>";
                echo $candidatos[$numcand]->AnosExperiencia."<br>";
             echo '</td></tr></table>';
        }     
    ?>
</tr>    
</table>
</div>

    @forelse($candidatos as $a)
    @empty
    <h3 class="text-center">Não existe Candidatos!</h3>
    @endforelse

{!! $candidatos->links('pagination::bootstrap-4')!!}
@endsection