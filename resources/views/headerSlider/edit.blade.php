@extends('layouts.main')
@section('content')
<div class="nk-block-head">
    <div class="nk-block-head-content">
        <h4 class="title nk-block-title">Edit Header Slider Image</h4>
    </div>
</div>
<div class="card card-bordered col-8">
    <div class="card-inner p-2">
        <form action="{{route('header-slider.update', $image->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="row g-4">
                <div class="col-lg-12">
                    <label class="form-label" for="customFileLabel">Logo Image</label>
                    <div class="form-control-wrap">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="image">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                        <div>
                            <span>{{$image->image}}</span>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-primary">Update Header Slider Image</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection