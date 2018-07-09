<?php

namespace App\Http\Controllers;

use App\market;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $markets = Market::all();
        return view ('markets.index', ['markets' => $markets]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('markets.create');
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
            'name' => 'bail|required|unique:markets|max:255',
            'website' => 'bail|required',
            'city' => 'bail|required',
        ]);
        Market::create($request->all());
        return redirect('markets');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\market  $market
     * @return \Illuminate\Http\Response
     */
    public function show(market $market)
    {
        return view('markets.show', ['market' => $market]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\market  $market
     * @return \Illuminate\Http\Response
     */
    public function edit(market $market)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\market  $market
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, market $market)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\market  $market
     * @return \Illuminate\Http\Response
     */
    public function destroy(market $market)
    {
        //
    }
}
