<?php

namespace App\Http\Controllers;

use App\vendedor;
use Illuminate\Http\Request;

class VendedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catalogo = Catalogo::all();
        return view('catalogo.index',['catalogo' => $catalogo]);
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
     * @param  \App\vendedor  $vendedor
     * @return \Illuminate\Http\Response
     */
    public function show(vendedor $vendedor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\vendedor  $vendedor
     * @return \Illuminate\Http\Response
     */
    public function edit(vendedor $vendedor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\vendedor  $vendedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vendedor $vendedor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\vendedor  $vendedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(vendedor $vendedor)
    {
        //
    }
}
