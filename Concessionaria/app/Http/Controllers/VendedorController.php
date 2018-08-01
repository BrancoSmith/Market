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
        $vendedor = Vendedor::all();
        return view('vendedor.index', ['vendedor' => $vendedor]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendedor.create');
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
        'nome' => 'required|max:100|min:2|regex:/^[a-zA-Z ]+$/',
        'cpf' => 'required|unique:vendedors|max:11|min:11',
        'telefone' =>'required',


    ]);

        Vendedor::create($request->all());
        return redirect('vendedor');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\vendedor  $vendedor
     * @return \Illuminate\Http\Response
     */
    public function show(vendedor $vendedor)
    {
        
        return view('vendedor.show', ['vendedor' => $vendedor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\vendedor  $vendedor
     * @return \Illuminate\Http\Response
     */
    public function edit(vendedor $vendedor)
    {
        return view('vendedor.edit', ['vendedor' => $vendedor]);
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
        $this->validate($request,  [
            'nome' => 'required|max:100',
            'cpf' => 'required|max:11|min:11',
            'telefone' =>'required',
    
        ]);

        $vendedor->update($request->all());
        return view('vendedor.show', ['vendedor' => $vendedor]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\vendedor  $vendedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(vendedor $vendedor)
    {
      
        Vendedor::Remove($vendedor);
        


        Session::flash('message', 'Excluido com Sucesso!!!');
        return Redirect('vendedor.index');
    }
}
