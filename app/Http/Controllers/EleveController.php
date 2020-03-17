<?php

namespace App\Http\Controllers;

use App\Eleve;
use Illuminate\Http\Request;

class ElevesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        //Inscription
        if ($request->isMethod('post')) {
            $eleve = new eleve();
            $eleve->matricule = "ok";
            $eleve->nom =  "ok";
            $eleve->datenaiss = "ok";
            $eleve->lieuNaiss = "ok";
            $eleve->sexe = "ok";
            $eleve->ecoleprovenance = "ok";
            $eleve->nomPere = "ok";
            $eleve->contactPere = "ok";
            $eleve->nomMere = "ok";
            $eleve->contactMere = "ok";
            $eleve->numTel = "ok";
            $eleve->quartier = "ok";
            $eleve->serie = "ok";
            $eleve->user_id = "ok";
            $eleve->save();

        }
        return redirect('/eleve');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Eleve  $eleve
     * @return \Illuminate\Http\Response
     */
    public function show(Eleve $eleve)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Eleve  $eleve
     * @return \Illuminate\Http\Response
     */
    public function edit(Eleve $eleve)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Eleve  $eleve
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Eleve $eleve)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Eleve  $eleve
     * @return \Illuminate\Http\Response
     */
    public function destroy(Eleve $eleve)
    {
        //
    }
}
