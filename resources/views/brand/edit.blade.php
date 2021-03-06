@extends('layouts.main')
@section('content')
<div class="nk-block-head">
    <div class="nk-block-head-content">
        <h4 class="title nk-block-title">Edit Brand</h4>
    </div>
</div>
<div class="card card-bordered col-8">
    <div class="card-inner p-2">
        <form action="{{route('brand.update', $brand->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="name">Brand Name</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Eg. Men" value="{{$brand->name}}" required>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <label class="form-label" for="customFileLabel">Logo Image</label>
                    <div class="form-control-wrap">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="image">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                        <div>
                            <span>{{$brand->image}}</span>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-primary">Update Brand</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection