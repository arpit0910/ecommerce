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
        return view('promocode.index', compact('promocodes'));
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
        return redirect(route('promocode.index'))->with('message', 'Promocode created successfully');
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
        $promocode = Promocode::where('id', $id)->first();
        return view('promocode.edit', compact('promocode'));
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
        $promocode = Promocode::where('id', $id)->first();
        if ($promocode) {
            $promocode->code = $request->code;
            $promocode->description = $request->description;
            $promocode->start_date = $request->start_date;
            $promocode->end_date = $request->end_date;
            $promocode->min_order_amount = $request->min_order_amount;
            $promocode->discount_amount = $request->discount_amount;
            $promocode->discount_type = $request->discount_type;
            $promocode->maximum_discount = $request->maximum_discount;
            if ($promocode->update()) {
                return redirect(route('promocode.index'))->with('message', 'Promocode updated successfully');
            } else {
                return redirect(route('promocode.index'))->with('error', 'An error occured. Please try again.');
            }
        } else {
            return redirect(route('promocode.index'))->with('error', 'An error occured. Please try again.');
        }
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
