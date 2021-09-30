@extends('layouts.main')
@section('content')
<!-- content @s -->

<div class="nk-block-head">
    <div class="nk-block-head-content">
        <div class="float-left">
            <h4 class="nk-block-title">Promocodes List</h4>
        </div>
        <div class="nk-block-des text-right">
            <a href="{{route('promocode.create')}}"><button class="btn btn-primary"><em class="icon ni ni-plus"></em>&nbsp Add Promocode</button></a>
        </div>
    </div>
</div>
<div class="card card-preview">
    <div class="card-inner">
        <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
            <thead>
                <tr class="nk-tb-item nk-tb-head">
                    <th class="nk-tb-col">#</th>
                    <th class="nk-tb-col"><span class="sub-text">Code</span></th>
                    <th class="nk-tb-col"><span class="sub-text">Description</span></th>
                    <th class="nk-tb-col"><span class="sub-text">Start Date</span></th>
                    <th class="nk-tb-col"><span class="sub-text">End Date</span></th>
                    <th class="nk-tb-col"><span class="sub-text">Discount Amount</span></th>
                    <th class="nk-tb-col"><span class="sub-text">Maximum Discount Amount</span></th>
                    <th class="nk-tb-col"><span class="sub-text">Status</span></th>
                    <th class="nk-tb-col"><span class="sub-text">More</span></th>
                </tr>
            </thead>
            <tbody>
                @forelse($promocodes as $key=>$promocode)
                <tr class="nk-tb-item">
                    <td class="nk-tb-col">
                        {{++$key}}
                    </td>
                    <td class="nk-tb-col">
                        <span class="fw-bolder">{{$promocode->code}}</span>
                    </td>
                    <td class="nk-tb-col">
                        {{$promocode->description}}
                    </td>
                    <td class="nk-tb-col">
                        {{$promocode->start_date}}
                    </td>
                    <td class="nk-tb-col">
                        {{$promocode->end_date}}
                    </td>
                    <td class="nk-tb-col">
                        {{$promocode->discount_amount}} {{$promocode->discount_type}} 
                    </td>
                    <td class="nk-tb-col">
                        {{$promocode->maximum_discount}}
                    </td>
                    <td class="nk-tb-col">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input status-switch" id="{{$promocode->id}}" data-id="{{$promocode->id}}" {{ $promocode->status == 1 ? 'checked' : '' }}>
                            <label class="custom-control-label" for="{{$promocode->id}}"></label>
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
                                                <a href="{{route('promocode.edit', $promocode->id)}}"><em class="icon ni ni-edit"></em><span>Edit</span></a>
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
                    <td colspan="8" class="text-center p-2">No Records Found</td>
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
            url: "{{route('promocode.toggleStatus')}}",
            data: {
                '_token': '{{csrf_token()}}',
                'status': status,
                'id': id
            },
            success: function(data) {
                console.log(data.success);
            }
        });
    });
</script>
@endsection