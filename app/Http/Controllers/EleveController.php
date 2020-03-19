<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\OffreFormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Controllers;
use App\Http\Requests;
use App\Eleve;

class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages/eleve');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->isMethod('post')) {
            $eleve = new eleve();
            $eleve->matricule = $request->input('matricule');
            $eleve->nom = $request->input('nom');
            $eleve->prenom = $request->input('prenom');
            $eleve->dateNaiss = $request->input('datenaiss');
            $eleve->lieuNaiss = $request->input('lieuNaiss');
            $eleve->sexe = $request->input('sexe');
            $eleve->ecoleprovenance = $request->input('ecoleprovenance');
            $eleve->nomPere = $request->input('nomPere');
            $eleve->contactPere = $request->input('contactPere');
            $eleve->nomMere = $request->input('nomMere');
            $eleve->contactMere = $request->input('contactMere');
            $eleve->numTel = $request->input('numTel');
            $eleve->quartier = $request->input('quartier');
            $eleve->serie = $request->input('serie');
            $eleve->classe_id = $request->input('classe');
            if ($request->hasFile('photo')) {
                $image = $request->file('photo');
                $image_ext = $image->getClientOriginalExtension();
                $new_image_name = rand(123456, 999999) . "." . $image_ext;
                $destination_path = public_path('/profil');
                $image->move($destination_path, $new_image_name);
                $eleve->photo =  $new_image_name;
                dd($new_image_name);
            }
           // dd($request->all());
            $eleve->save();
        }
        return redirect('/signup');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
