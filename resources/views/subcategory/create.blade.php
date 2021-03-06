@extends('layouts.main')
@section('content')
<div class="nk-block-head">
    <div class="nk-block-head-content">
        <h4 class="title nk-block-title">Create Sub Category</h4>
    </div>
</div>
<div class="card card-bordered col-8">
    <div class="card-inner p-2">
        <form action="{{route('subcategory.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row g-4">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-label" for="name">Category</label>
                        <div class="form-control-wrap">
                            <select class="form form-control form-control-lg ri-select" name="category_id" data-search="on" required>
                                <option value="" disabled selected>Select Category</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="name">Name</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Men Shoes" required>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <label class="form-label" for="customFileLabel">Image</label>
                    <div class="form-control-wrap">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="image" required>
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-label" for="description">Description</label>
                        <div class="form-control-wrap">
                            <textarea class="form-control" id="description" placeholder="Sub Category" name="description"></textarea>
                        </div>
                    </div>
                </div>
                <div>
                    <div></div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-primary">Create Category</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection