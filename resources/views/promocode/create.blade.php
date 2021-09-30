@extends('layouts.main')
@section('content')
<div class="nk-block-head">
    <div class="nk-block-head-content">
        <h4 class="title nk-block-title">Create Promocode</h4>
    </div>
</div>
<div class="card card-bordered col-8">
    <div class="card-inner p-2">
        <form action="{{route('promocode.store')}}" method="post">
            @csrf
            <div class="row g-4">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-label" for="code">Code</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" id="code" name="code" placeholder="Eg. NEWUSER10">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="start_date">Start Date</label>
                        <div class="form-control-wrap">
                            <input type="date" class="form-control" id="start_date" name="start_date" placeholder="Eg. 22/02/2021">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="end_date">End Date</label>
                        <div class="form-control-wrap">
                            <input type="date" class="form-control" id="end_date" name="end_date" placeholder="Eg. 22/02/2022">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="min_order_amount">Min Order Amount (₹)</label>
                        <div class="form-control-wrap">
                            <input type="number" class="form-control" id="min_order_amount" name="min_order_amount" placeholder="Eg. 22/02/2022" step="0.1">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="maximun_discount">Maximun Discount Amount (₹)</label>
                        <div class="form-control-wrap">
                            <input type="number" class="form-control" id="maximun_discount" name="maximun_discount" placeholder="Eg. 500" step="0.1">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="discount_amount">Discount Amount (₹) or %</label>
                        <div class="form-control-wrap">
                            <input type="number" class="form-control" id="discount_amount" name="discount_amount" placeholder="Eg. 500" step="0.1">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="discount_type">Discount Type</label>
                        <div class="form-control-wrap">
                            <select type="text" class="form-control" id="discount_type" name="discount_type">
                                <option class="form-control" value="" selected disabled>Select Discount Type</option>
                                <option class="form-control" value="rupees">Rupees</option>
                                <option class="form-control" value="percentage">%</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-label" for="description">Description</label>
                        <div class="form-control-wrap">
                            <textarea class="form-control" id="description" placeholder="Eg. 15% Instant discount on first Pay Later order of ₹500 and above." name="description"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-primary">Create Promocode</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection