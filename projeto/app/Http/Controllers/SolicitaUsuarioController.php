<?php

namespace App\Http\Controllers;

use App\Models\SolicitaUsuario;
use Illuminate\Http\Request;

class SolicitaUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('solicitacao.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SolicitaUsuario  $solicitaUsuario
     * @return \Illuminate\Http\Response
     */
    public function show(SolicitaUsuario $solicitaUsuario)
    {
        return view('solicitacao.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SolicitaUsuario  $solicitaUsuario
     * @return \Illuminate\Http\Response
     */
    public function edit(SolicitaUsuario $solicitaUsuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SolicitaUsuario  $solicitaUsuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SolicitaUsuario $solicitaUsuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SolicitaUsuario  $solicitaUsuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(SolicitaUsuario $solicitaUsuario)
    {
        //
    }
}
