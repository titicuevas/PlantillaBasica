<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorepedidoRequest;
use App\Http\Requests\UpdatepedidoRequest;
use App\Models\pedido;

class PedidoController extends Controller
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
     * @param  \App\Http\Requests\StorepedidoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepedidoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show(pedido $pedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(pedido $pedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepedidoRequest  $request
     * @param  \App\Models\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepedidoRequest $request, pedido $pedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(pedido $pedido)
    {
        //
    }
}
