<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $existingCategory = Category::where('name', $request->name)->first();
        if ($existingCategory) {
            return redirect(route('category.index'))->with('error', 'Category with same name already exists. Please check and try again.');
        } else {
            if ($request->hasFile('image')) {
                $request->validate([
                    'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
                ]);
                // Save the file locally in the storage/public/ folder under a new folder named /category
                $filename = $request->name;
                $imagename = $this->storeMedia($request->file('image'), $filename);
                // Store the record, using the new file hashname which will be it's new filename identity.
                $category = new Category([
                    "name" => $request->name,
                    "description" => $request->description,
                    "image" => $imagename,
                ]);
                if ($category->save()) {
                    return redirect(route('category.index'))->with('message', 'Category created successfully');
                } else {
                    return redirect(route('category.index'))->with('error', 'An error occured. Please try again.');
                }
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::where('id', $id)->first();
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::where('id', $id)->first();
        if ($category) {
            if ($request->hasFile('image')) {
                $request->validate([
                    'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
                ]);
                // Save the file locally in the storage/public/ folder under a new folder named /category
                $filename = $request->name;
                $imagename = $this->storeMedia($request->file('image'), $filename);
                // Store the record, using the new file hashname which will be it's new filename identity.
                $category->image = $imagename;
            }
            $category->name = $request->name;
            $category->description = $request->description;
            $category->save();
            return redirect(route('category.index'))->with('message', 'Category updated successfully');
        }
        return redirect(route('category.index'))->with('error', 'An error occured while updating category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
    public function toggleStatus(Request $request)
    {
        $category = Category::where('id', $request->id)->first();
        if ($category) {
            $category->status = $request->status;
            if ($category->update()) {
                return response()->json(['success' => 'Status changed successfully.']);
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
            $saveLocation = "storage/images/categories/";
            if (!file_exists($saveLocation)) {
                mkdir($saveLocation, 777, true);
            }
            $imageName = $filename . '.' . $file->getClientOriginalExtension();
            Image::make($file->getRealPath())->save($saveLocation . $imageName, 100);
            return $imageName;
        }
    }
}
