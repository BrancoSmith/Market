<?php

namespace App\Http\Controllers;

use App\Ano;
use Illuminate\Http\Request;
use App\Carro;
class AnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ano = Ano::all();
        return view('ano.index', ['ano' => $ano]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ano.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Ano::create($request->all());
        return redirect('ano');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ano  $ano
     * @return \Illuminate\Http\Response
     */
    public function show(Ano $ano)
    {
        return view('ano.show', ['ano' => $ano]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ano  $ano
     * @return \Illuminate\Http\Response
     */
    public function edit(Ano $ano)
    {
        $carros = Carro::get()->pluck('nome', 'id')->sortBy('nome');
        return view('ano.edit', compact('ano', 'carros'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ano  $ano
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ano $ano)
    {
        $ano->update($request->all());
        $ano->carros()->sync($request->carros);
        return view('ano.show', ['ano' => $ano]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ano  $ano
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ano $ano)
    {
        //
    }
}
