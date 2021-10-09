<?php

namespace App\Http\Controllers;

use App\Models\HeaderSlider;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class HeaderSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = HeaderSlider::all();
        return view('headerSlider.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('headerSlider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);
            // Save the file locally in the storage/public/ folder under a new folder named /Brand
            $filename = $request->image->getClientOriginalName();
            $imagename = $this->storeMedia($request->file('image'), $filename);
            // Store the record, using the new file hashname which will be it's new filename identity.
            $image = new HeaderSlider([
                "image" => $imagename,
            ]);
            $image->save();
            return redirect(route('header-slider.index'))->with('message', 'Slider Image added successfully');
        }
        return redirect(route('header-slider.index'))->with('error', 'An error occured while creating brand');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HeaderSlider  $headerSlider
     * @return \Illuminate\Http\Response
     */
    public function show(HeaderSlider $headerSlider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HeaderSlider  $headerSlider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $image = HeaderSlider::where('id',$id)->first();
        return view('headerSlider.edit', compact('image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HeaderSlider  $headerSlider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);
            // Save the file locally in the storage/public/ folder under a new folder named /Brand
            $filename = $request->image->getClientOriginalName();
            $imagename = $this->storeMedia($request->file('image'), $filename);
            // Store the record, using the new file hashname which will be it's new filename identity.
            $image = new HeaderSlider([
                "image" => $imagename,
            ]);
            $image->save();
            return redirect(route('header-slider.index'))->with('message', 'Slider Image added successfully');
        }
        return redirect(route('header-slider.index'))->with('error', 'An error occured while creating brand');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HeaderSlider  $headerSlider
     * @return \Illuminate\Http\Response
     */
    public function destroy(HeaderSlider $headerSlider)
    {
        //
    }
    public function storeMedia($file, $filename)
    {
        if (!empty($file)) {
            $saveLocation = "storage/images/headerSlider/";
            if (!file_exists($saveLocation)) {
                mkdir($saveLocation, 777, true);
            }
            Image::make($file->getRealPath())->save($saveLocation . $filename, 100);
            return $filename;
        }
    }
}
