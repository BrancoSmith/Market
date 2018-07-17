<?php

namespace App\Http\Controllers;

use App\Carro;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carro = Carro::all();
        return view('carro.index', ['carro' => $carro]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carro.create');
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
            'nome' => 'required|unique:carros|max:255',
            'ano' => 'required',
            'preco' => 'required',
        ]);
   


        carro::create($request->all());
        return redirect('carro');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function show(carro $carro)
    {
        return view('carro.show', ['carro' => $carro]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function edit(carro $carro)
    {
        
        return view('carro.edit', ['carro' => $carro]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, carro $carro)
    {
        $carro->update($request->all());
        return view('carro.show', ['carro' => $carro]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function destroy(carro $carro)
    {
        //
    }
}