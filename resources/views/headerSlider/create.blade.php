@extends('layouts.main')
@section('content')
<div class="nk-block-head">
    <div class="nk-block-head-content">
        <h4 class="title nk-block-title">Add Header Slider Image </h4>
    </div>
</div>
<div class="card card-bordered col-8">
    <div class="card-inner p-2">
        <form action="{{route('header-slider.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row g-4">
                <div class="col-lg-12">
                    <label class="form-label" for="image">Slider Image</label>
                    <div class="form-control-wrap">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="image">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                </div>
                <div>
                    <div></div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-primary">Add Slider Image</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection