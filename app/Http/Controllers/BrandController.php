<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Image;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        return view('brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brand.create');
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
            $filename = $request->name;
            $imagename = $this->storeMedia($request->file('image'), $filename);
            // Store the record, using the new file hashname which will be it's new filename identity.
            $brand = new Brand([
                "name" => $request->name,
                "image" => $imagename,
            ]);
            $brand->save();
            return redirect(route('brand.index'))->with('message', 'Brand created successfully');
        }
        return redirect(route('brand.index'))->with('error', 'An error occured while creating brand');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = Brand::where('id', $id)->first();
        return view('brand.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $brand = Brand::where('id', $id)->first();
        if ($brand) {
            if ($request->hasFile('image')) {
                $request->validate([
                    'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
                ]);
                // Save the file locally in the storage/public/ folder under a new folder named /brand
                $filename = $request->name;
                $imagename = $this->storeMedia($request->file('image'), $filename);
                // Store the record, using the new file hashname which will be it's new filename identity.
                $brand->image = $imagename;
            }
            $brand->name = $request->name;
            $brand->save();
            return redirect(route('brand.index'))->with('message', 'Brand updated successfully');
        }
        return redirect(route('brand.index'))->with('error', 'An error occured while updating brand');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(brand $brand)
    {
        //
    }
    public function toggleStatus(Request $request)
    {
        $brand = Brand::find($request->id)->update(['status' => $request->status]);
        return response()->json(['success' => 'Status changed successfully.']);
    }
    public function storeMedia($file, $filename)
    {
        if (!empty($file)) {
            $saveLocation = "storage/images/brands/";
            if (!file_exists($saveLocation)) {
                mkdir($saveLocation, 777, true);
            }
            $imageName = $filename . '.' . $file->getClientOriginalExtension();
            Image::make($file->getRealPath())->save($saveLocation . $imageName, 100);
            return $imageName;
        }
    }
}
