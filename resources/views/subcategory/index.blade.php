@extends('layouts.main')
@section('content')
<!-- content @s -->

<div class="nk-block-head">
    <div class="nk-block-head-content">
        <div class="float-left">
            <h4 class="nk-block-title">Sub Categories</h4>
        </div>
        <div class="nk-block-des text-right">
            <a href="{{route('subcategory.create')}}"><button class="btn btn-primary"><em class="icon ni ni-plus"></em>&nbsp Add Sub Category</button></a>
        </div>
    </div>
</div>
<div class="alert-div" id="alert"></div>
<x-alert/>
<div class="card card-preview">
    <div class="card-inner">
        <table class="datatable-init nowrap nk-tb-list nk-tb-ulist" data-auto-responsive="false">
            <thead>
                <tr class="nk-tb-item nk-tb-head">
                    <th class="nk-tb-col">#</th>
                    <th class="nk-tb-col"><span class="sub-text">Category</span></th>
                    <th class="nk-tb-col"><span class="sub-text">Name</span></th>
                    <th class="nk-tb-col"><span class="sub-text">Description</span></th>
                    <th class="nk-tb-col"><span class="sub-text">Image</span></th>
                    <th class="nk-tb-col"><span class="sub-text">Status</span></th>
                    <th class="nk-tb-col"><span class="sub-text">More</span></th>
                </tr>
            </thead>
            <tbody>
                @forelse($subCategories as $key=>$subCategory)
                <tr class="nk-tb-item">
                    <td class="nk-tb-col">
                        {{++$key}}
                    </td>
                    <td class="nk-tb-col">
                        <span class="fw-bolder">{{$subCategory->category->name}}</span>
                    </td>
                    <td class="nk-tb-col">
                    <span class="fw-bolder">{{$subCategory->name}}</span>
                    </td>
                    <td class="nk-tb-col">
                        {{$subCategory->description}}
                    </td>
                    <td class="nk-tb-col">
                        <img width="50px" src="{{asset('storage/images/subcategories') .'/' . $subCategory->image}}" alt="">
                    </td>
                    <td class="nk-tb-col">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input status-switch" id="{{$subCategory->id}}" data-id="{{$subCategory->id}}" {{ $subCategory->status == 1 ? 'checked' : '' }}>
                            <label class="custom-control-label" for="{{$subCategory->id}}"></label>
                        </div>
                    </td>
                    <td class="nk-tb-col nk-tb-col-tools">
                        <ul class="">
                            <li>
                                <div class="drodown">
                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="link-list-opt no-bdr">
                                            <li>
                                                <a href="{{route('subcategory.edit', $subCategory->id)}}"><em class="icon ni ni-edit"></em><span>Edit</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
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
<script src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript">
    $('.status-switch').change(function() {
        var id = $(this).data('id');
        var status = $(this).prop('checked') == true ? 1 : 0;
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "{{route('subcategory.toggleStatus')}}",
            data: {
                '_token': '{{csrf_token()}}',
                'status': status,
                'id': id
            },
            success: function(data) {
                if (data.success) {
                    $('#alert').html(`<div class="alert alert-success">${data.success}</div>`);
                    window.setTimeout(function() {
                        $('.alert').fadeTo(1000, 0).slideUp(1000, function() {
                            $('#alert').html('');
                        });
                    }, 1000)
                } else {
                    $('#alert').html(`<div class="alert alert-danger">${data.error}</div>`);
                    window.setTimeout(function() {
                        $('.alert').fadeTo(1000, 0).slideUp(1000, function() {
                            $('#alert').html('');
                        });
                    }, 1000)
                }
            },
            error: function(data) {
                $('#alert').html(`<div class="alert alert-danger">${data.error}</div>`);
                window.setTimeout(function() {
                    $('.alert').fadeTo(1000, 0).slideUp(1000, function() {
                        $('#alert').html('');
                    });
                }, 1000)
            }
        });
    });
</script>
@endsection