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
                        <label class="form-label" for="code">Promo Code<span class="text-danger">*</span></label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" id="code" name="code" placeholder="Eg. NEWUSER10" required>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="start_date">Start Date<span class="text-danger">*</span></label>
                        <div class="form-control-wrap">
                            <input type="date" class="form-control" id="start_date" name="start_date" required>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="end_date">End Date<span class="text-danger">*</span></label>
                        <div class="form-control-wrap">
                            <input type="date" class="form-control" id="end_date" name="end_date" required>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="min_order_amount">Min Order Amount (₹)</label>
                        <div class="form-control-wrap">
                            <input type="number" class="form-control" id="min_order_amount" name="min_order_amount" placeholder="Eg. 100" step="0.1">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="maximum_discount">Maximun Discount Amount (₹)</label>
                        <div class="form-control-wrap">
                            <input type="number" class="form-control" id="maximum_discount" name="maximum_discount" placeholder="Eg. 500" step="0.1">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="discount_amount">Discount Amount (₹) or (%)<span class="text-danger">*</span></label>
                        <div class="form-control-wrap">
                            <input type="number" class="form-control" id="discount_amount" name="discount_amount" placeholder="Eg. 500" step="0.1" required> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label" for="discount_type">Discount Type<span class="text-danger">*</span></label>
                        <div class="form-control-wrap">
                            <select type="text" class="form-control ri-select" id="discount_type" name="discount_type" required>
                                <option class="form-control" value="" selected disabled>Select Discount Type</option>
                                <option class="form-control" value="rupees">Rupees</option>
                                <option class="form-control" value="percentage">Percentage</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-label" for="description">Description</label>
                        <div class="form-control-wrap">
                            <textarea class="form-control" id="description" placeholder="Eg. 15% instant discount on first Pay Later order of ₹500 and above." name="description"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-primary">Add Promocode</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection