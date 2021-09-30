<?php

namespace App\Http\Controllers;

use App\Models\Promocode;
use Illuminate\Http\Request;

class PromocodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promocodes = Promocode::all();
        return view('promocode.index',compact('promocodes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('promocode.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $promocode = Promocode::create($request->all());
        return redirect(route('promocode.index'))->with('message','Promocode created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\promocode  $promocode
     * @return \Illuminate\Http\Response
     */
    public function show(promocode $promocode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\promocode  $promocode
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $promocode = Promocode::where('id',$id)->first();
        return view('promocode.edit',compact('promocode'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\promocode  $promocode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\promocode  $promocode
     * @return \Illuminate\Http\Response
     */
    public function destroy(promocode $promocode)
    {
        //
    }
}
