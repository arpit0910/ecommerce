<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Image;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subCategories = SubCategory::all();
        return view('subcategory.index', compact('subCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('status', '1')->get();
        return view('subcategory.create', compact('categories'));
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
            // Save the file locally in the storage/public/ folder under a new folder named /category
            $filename = $request->name;
            $imagename = $this->storeMedia($request->file('image'), $filename);
            // Store the record, using the new file hashname which will be it's new filename identity.
            $subCategory = new SubCategory([
                "category_id" => $request->category_id,
                "name" => $request->name,
                "description" => $request->description,
                "image" => $imagename,
            ]);
            $subCategory->save();
            return redirect(route('subcategory.index'))->with('message', 'Sub Category Created Successfully');
        }
        return redirect(route('subcategory.index'))->with('error', 'An error occured. Please try again.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::where('status', '1')->get();
        $subCategory = SubCategory::where('id', $id)->first();
        return view('subcategory.edit', compact('subCategory', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $subCategory = SubCategory::where('id', $id)->first();
        if ($subCategory) {
            if ($request->hasFile('image')) {
                $request->validate([
                    'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
                ]);
                $filename = $request->name;
                $imagename = $this->storeMedia($request->file('image'), $filename);
                $subCategory->image = $imagename;
            }
            $subCategory->category_id = $request->category_id;
            $subCategory->name = $request->name;
            $subCategory->description = $request->description;
            $subCategory->save();
            return redirect(route('subcategory.index'))->with('message', 'Sub Category Updated Successfully');
        }
        return redirect(route('subcategory.index'))->with('message', 'An error occured. Please try again.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subCategory)
    {
        //
    }
    public function toggleStatus(Request $request)
    {
        $subCategory = SubCategory::where('id', $request->id)->first();
        if ($subCategory) {
            $subCategory->status = $request->status;
            if ($subCategory->update()) {
                return response()->json(['success' => 'Status Changed Successfully.']);
            } else {
                return response()->json(['error' => 'An error occurred. Please try again.']);
            }
        } else {
            return response()->json(['error' => 'An error occurred. Please try again.']);
        }
    }
    public function storeMedia($file, $filename)
    {
        if (!empty($file)) {
            $saveLocation = "storage/images/subcategories/";
            if (!file_exists($saveLocation)) {
                mkdir($saveLocation, 777, true);
            }
            $imageName = $filename . '.' . $file->getClientOriginalExtension();
            Image::make($file->getRealPath())->save($saveLocation . $imageName, 100);
            return $imageName;
        }
    }
}
