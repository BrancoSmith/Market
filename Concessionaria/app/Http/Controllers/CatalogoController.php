<?php

namespace App\Http\Controllers;

use App\catalogo;
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catalogo = Catalogo::all();
        return view('catalogo.index', ['catalogo' => $catalogo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('catalogo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required|unique:catalogo|max:255',
            'ano' => 'required',
            'preco' => 'required',
        ]);


        Catalogo::create($request->all());
        return redirect('catalogo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\catalogo  $catalogo
     * @return \Illuminate\Http\Response
     */
    public function show(catalogo $catalogo)
    {
        return view('catalogo.show', ['catalogo' => $catalogo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\catalogo  $catalogo
     * @return \Illuminate\Http\Response
     */
    public function edit(catalogo $catalogo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\catalogo  $catalogo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, catalogo $catalogo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\catalogo  $catalogo
     * @return \Illuminate\Http\Response
     */
    public function destroy(catalogo $catalogo)
    {
        //
    }
}
