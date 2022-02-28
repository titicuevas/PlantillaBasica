<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorearticuloRequest;
use App\Http\Requests\UpdatearticuloRequest;
use App\Models\articulo;
use Illuminate\Http\Request;
use App\Models\categoria;
use Session;



class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $articulos=articulo::all();
        $carrito=session('articulos');
        //var_dump($carrito);die;


        return view('articulos.index',['articulos' =>$articulos,'carrito'=>$carrito]);

    }

    public function carrito( Request $request, $id)
{
    // comprobar si esta vacio
    if($request->session()->exists('articulos')){
        $request->session()->get('articulos', []);
    }

    $valorActual = $request->session()->get('articulos', []);



    if (!isset($valorActual[$id])) {
        $valorActual[$id] = 0;
    }

    $valorActual[$id]++;

    $request->session()->put('articulos', $valorActual);
    

    return redirect()->route('articulo.index');
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articulo = new Articulo();
        $categorias =categoria::all();
        return view('articulos.create', ['articulo'=> $articulo,'categorias'=>$categorias]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorearticuloRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorearticuloRequest $request)
    {

        $validados = $request->validated();
        //var_dump($validados);die;
        $validados["categoria_id"] = $request->categoria_id;
        $articulo = new Articulo($validados);

        $articulo->save();


        return redirect()->route('articulo.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function show(articulo $articulo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function edit(articulo $articulo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatearticuloRequest  $request
     * @param  \App\Models\articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatearticuloRequest $request, articulo $articulo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function destroy(articulo $articulo)
    {
        //$articulo = articulo::findOrFail($id);
        $articulo->delete();

        return redirect()->back()->with('success','Articulo borrado correctamente');
    }
}
