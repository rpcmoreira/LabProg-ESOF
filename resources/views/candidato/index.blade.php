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

<table class="table">
<tr>
    <?php

use League\CommonMark\Extension\Table\Table;

for($numcand=0,$numcell=0;$numcand<count($candidatos);$numcand++,$numcell++){  
            if($numcell==4){
                echo '</tr><tr>';
                $numcell = 0;
            }
            echo '<td>';
                echo '<table>';
                echo "<tr><td><img src='{URL::asset('/img/stock.jpg')}' alt='logo' height='200' width='200'></td></tr>";
                echo "<tr><td>";
                echo $candidatos[$numcand]->Nome." ".$candidatos[$numcand]->Sobrenome."<br>";
                echo $candidatos[$numcand]->Cargo."<br>";
                echo $candidatos[$numcand]->AnosExperiencia."<br>";
             echo '</td></tr></table>';
        }     
    ?>
</tr>    
</table>

{!! $candidatos->links('pagination::bootstrap-4')!!}
@endsection