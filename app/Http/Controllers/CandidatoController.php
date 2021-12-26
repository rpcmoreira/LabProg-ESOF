<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use stdClass;

class CandidatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidatos= Candidato::paginate(12);
        return view('candidato.index',['candidatos'=>$candidatos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('candidato.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['Nome'=>'required|max:20|min:2',
                            'Sobrenome'=>'required|max:20|min:2',
                            'Cargo'=>'required|max:20|min:2',
                            'AnosExperiencia'=>'required|integer|min:0|max:70',
                            'Sexo' => 'required',

                            'Email' =>'required',
                            'Password' => 'required',// |min:8|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/
                            'Confirmar_password' => 'required|same:Password',

                            ]);

        Candidato::create($request->all());                    

        /*$candidato = new Candidato;
        $candidato->Nome = $request->input('Nome');
        $candidato->Sobrenome = $request->input('Sobrenome');
        $candidato->Cargo = $request->input('Cargo');
        $candidato->AnosExperiencia = $request->input('AnosExperiencia');
        $candidato->Sexo = $request->input('Sexo');
        $candidato->Email = $request->input('Email');
        $candidato->Password = $request->input('Password');*/

        /*$file = Storage::get(asset('/public/img/F2.jpg'));
        $filename = time().rand(1,10000).'.jpg';
        Storage::copy('/public/img/F1.jpg', '/storage/app/public/candidatos/'.$filename);
        $candidato->Imagem=$filename;*/

        return redirect('candidato')->with('success', 'Candidato criado com successo.');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function show(Candidato $candidato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidato $candidato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidato $candidato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidato $candidato)
    {
        //
    }
}
?>
<script type="text/JavaScript">
    var x = window.innerWidth;
    document.getElementById("demo").innerHTML = x;
</script>