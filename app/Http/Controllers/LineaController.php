<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorelineaRequest;
use App\Http\Requests\UpdatelineaRequest;
use App\Models\linea;

class LineaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorelineaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorelineaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\linea  $linea
     * @return \Illuminate\Http\Response
     */
    public function show(linea $linea)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\linea  $linea
     * @return \Illuminate\Http\Response
     */
    public function edit(linea $linea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatelineaRequest  $request
     * @param  \App\Models\linea  $linea
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatelineaRequest $request, linea $linea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\linea  $linea
     * @return \Illuminate\Http\Response
     */
    public function destroy(linea $linea)
    {
        //
    }
}
