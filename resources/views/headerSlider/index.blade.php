@extends('layouts.main')
@section('content')
<!-- content @s -->

<div class="nk-block-head">
    <div class="nk-block-head-content">
        <div class="float-left">
            <h4 class="nk-block-title">Header Slider Image List</h4>
        </div>
        <div class="nk-block-des text-right">
            <a href="{{route('header-slider.create')}}"><button class="btn btn-primary"><em class="icon ni ni-plus"></em>&nbsp Add Slider Image</button></a>
        </div>
    </div>
</div>
<div class="card card-preview">
    <div class="card-inner">
        <table class="datatable-init nowrap nk-tb-list nk-tb-ulist" data-auto-responsive="false">
            <thead>
                <tr class="nk-tb-item nk-tb-head">
                    <th class="nk-tb-col">#</th>
                    <th class="nk-tb-col"><span class="sub-text">Slider Image Name</span></th>
                    <th class="nk-tb-col"><span class="sub-text">Slider Image Preview</span></th>
                    <th class="nk-tb-col"><span class="sub-text">Action</span></th>
                </tr>
            </thead>
            <tbody>
                @forelse($images as $key=>$image)
                <tr class="nk-tb-item">
                    <td class="nk-tb-col">
                        {{++$key}}
                    </td>
                    <td class="nk-tb-col">
                        <img width="50px" src="{{asset('storage/images/headerSlider') .'/' . $image->image}}" alt="">
                    </td>
                    <td class="nk-tb-col">
                        {{$image->image}}
                    </td>
                    <td class="nk-tb-col nk-tb-col-tools">
                        <h4><a href="{{route('header-slider.edit', $image->id)}}"><em class="icon ni ni-edit"></em>
                                <a href="javascript: void(0);" class="action-icon text-danger p-2" onclick="deleteImage('{{$image->id}}', '{{$image->image}}')"> <i class="ni ni-trash"></i></a></h4>
                    </td>
                </tr><!-- .nk-tb-item  -->
                @empty
                <tr class="nk-tb-item">
                    <td colspan="7" class="text-center p-2">No Records Found</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div><!-- .card-preview -->
<!-- content @s -->
<form id="delete_form" style="display:none" method="post">
    @csrf
    @method('delete')
</form>
<script>
    function deleteImage(ImageId, ImageName) {
        event.preventDefault();
        var base_url = "{{ url('/') }}"
        if (confirm('Do you really want to delete ' + ImageName + ' from Header Slider Images?')) {
            var deleteForm = $('#delete_form');
            deleteForm.attr('action', base_url + "/header-slider/" + ImageId);
            deleteForm.submit();
        }
    }
</script>
@endsection