<?php

namespace App\Http\Controllers;

use App\Venda;
use Illuminate\Http\Request;
use App\Carro;
use App\Cliente;
use App\Vendedor;
class VendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $venda = Venda::all();
        return view('venda.index', ['vendas' => $venda] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carros = Carro::get();
        $clientes = Cliente::get();
        $vendedors = Vendedor::get();
        return view('venda.create', compact('carros', 'clientes', 'vendedors'));
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
            'cliente_id' => 'required',
            'carro_id' => 'required',
            'vendedor_id' => 'required',
        ]);
       
        Venda::create($request->all());
        return redirect('venda');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Venda  $venda
     * @return \Illuminate\Http\Response
     */
    public function show(Venda $venda)
    {
       // dd($venda->carro->nome);
      return view('venda.show', compact('venda'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Venda  $venda
     * @return \Illuminate\Http\Response
     */
    public function edit(Venda $venda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Venda  $venda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Venda $venda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Venda  $venda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venda $venda)
    {
        //
    }
}
