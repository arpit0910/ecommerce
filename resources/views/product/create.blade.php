@extends('layouts.main')
@section('content')
<div class="nk-block-head">
    <div class="nk-block-head-content">
        <h4 class="title nk-block-title">Create Product</h4>
    </div>
</div>
<div class="card card-bordered col-12">
    <div class="card-inner p-2">
        <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-label">Brand</label>
                        <div class="form-control-wrap">
                            <select class="form form-control form-control-lg ri-select" name="brand_id" data-search="on" required>
                                <option value="" disabled selected>Select Brand</option>
                                @foreach($brands as $brand)
                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-label">Category</label>
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
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-label">Sub Category</label>
                        <div class="form-control-wrap">
                            <select class="form form-control form-control-lg ri-select" name="sub_category_id" data-search="on" required>
                                <option value="" disabled selected>Select Sub Category</option>
                                @foreach($subCategories as $subCategory)
                                <option value="{{$subCategory->id}}">{{$subCategory->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-label">SKU</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" id="sku" name="seller_sku_id" placeholder="SKU" required>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-label">Name</label>
                        <div class="form-control-wrap">
                            <input class="form-control" id="name" placeholder="Name" name="name" required>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-label">MRP</label>
                        <div class="form-control-wrap">
                            <input type="number" class="form-control" name="mrp" placeholder="Enter mrp" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-label">MSP</label>
                        <div class="form-control-wrap">
                            <input type="number" class="form-control" name="msp" placeholder="Enter msp">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-label">Procurement Sla</label>
                        <div class="form-control-wrap">
                            <input type="number" class="form-control" name="procurement_sla" placeholder="Enter procurement sla">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-label">Stock</label>
                        <div class="form-control-wrap">
                            <input type="number" class="form-control" name="stock" placeholder="Enter stock">
                        </div>
                    </div>
                </div>

            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-label">Local Delivery Charges</label>
                        <div class="form-control-wrap">
                            <input type="number" class="form-control" name="local_delivery_charges" placeholder="Enter local delivery charges">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-label">Regional Delivery Charges</label>
                        <div class="form-control-wrap">
                            <input type="number" class="form-control" name="regional_delivery_charges" placeholder="Enter regional delivery charges">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-label">National Delivery Charges</label>
                        <div class="form-control-wrap">
                            <input type="number" class="form-control" name="national_delivery_charges" placeholder="Enter national delivery charges">
                        </div>
                    </div>
                </div>
            </div>
            @php
            $weightUnits = [
            'g','kg','pound','ounce'
            ];
            $otherUnits = [
            'mm','cm','meter'
            ];
            @endphp

            <div class="row g-4 mb-4">
                <div class="col-lg-3 ">
                    <div>
                        <label class="form-label"> Weight</label>
                    </div>
                    <div class="input-group ">
                        <input type="number" name="weight" placeholder="Enter Weight" class="form-control" step="0.01">
                        <div class="input-group-append">
                            <select class="form form-control  ri-select" name="weight_unit" data-search="on">
                                <option value="" disabled selected>Select</option>
                                @foreach($weightUnits as $weightUnit)
                                <option value="{{$weightUnit}}">{{$weightUnit}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div>
                        <label class="form-label"> Length</label>
                    </div>
                    <div class="input-group ">
                        <input type="number" name="length" placeholder="Enter Length" class="form-control" step="0.01">
                        <div class="input-group-append">
                            <select class="form form-control  ri-select" name="length_unit" data-search="on">
                                <option value="" disabled selected>Select</option>
                                @foreach($otherUnits as $otherUnit)
                                <option value="{{$otherUnit}}">{{$otherUnit}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div>
                        <label class="form-label"> Breadth</label>
                    </div>
                    <div class="input-group ">
                        <input type="number" name="breadth" placeholder="Enter Breadth" class="form-control" step="0.01">
                        <div class="input-group-append">
                            <select class="form form-control  ri-select" name="breadth_unit" data-search="on">
                                <option value="" disabled selected>Select</option>
                                @foreach($otherUnits as $otherUnit)
                                <option value="{{$otherUnit}}">{{$otherUnit}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div>
                        <label class="form-label"> Height</label>
                    </div>
                    <div class="input-group ">
                        <input type="number" name="height" placeholder="Enter Height" class="form-control" step="0.01">
                        <div class="input-group-append">
                            <select class="form form-control  ri-select" name="height_unit" data-search="on">
                                <option value="" disabled selected>Select</option>
                                @foreach($otherUnits as $otherUnit)
                                <option value="{{$otherUnit}}">{{$otherUnit}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-label">HSN Code</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" name="hsn_code" placeholder="Enter hsn code">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-label">Tax Percentage</label>
                        <div class="form-control-wrap">
                            <input type="number" class="form-control" name="tax_percentage" placeholder="Enter tax percentage">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-label">Country Of Origin</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" name="country_of_origin" placeholder="Enter country of origin">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-label">Manufacturer Details</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" name="manufacturer_details" placeholder="Enter manufacturer details">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-label">Packer Details</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" name="packer_details" placeholder="Enter packer details">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-label">Importer Details</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" name="importer_details" placeholder="Enter importer details">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-label">Minimum Age</label>
                        <div class="form-control-wrap">
                            <input type="number" class="form-control" name="minimum_age" placeholder="Enter minimum age">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-label">Maximum Age</label>
                        <div class="form-control-wrap">
                            <input type="number" class="form-control" name="maximum_age" placeholder="Enter maximum age">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-label">Ideal For</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" name="ideal for" placeholder="Enter ideal_for">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-label">Fabric</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" name="fabric" placeholder="Enter fabric">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-label">Color</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" name="color" placeholder="Enter color">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-label">Description</label>
                        <div class="form-control-wrap">
                            <textarea type="text" class="form-control" name="description" placeholder="Enter description"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-label">Key Features</label>
                        <div class="form-control-wrap">
                            <textarea type="text" class="form-control" name="key_features" placeholder="Enter key features"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-label">Search Keywords</label>
                        <div class="form-control-wrap">
                            <textarea type="text" class="form-control" name="search_keywords" placeholder="Enter search keywords"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-2">
                    <div class="form-group">
                        <label class="form-label">Status</label>
                        <div class="form-control-wrap">
                            <select class="form form-control form-control-lg ri-select" name="status" data-search="on">
                                <option value="1" selected>Active</option>
                                <option value="0">Deactive</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <button type="submit" class="btn btn-lg btn-primary">Create Category</button>
            </div>
    </div>
    </form>
</div>

@endsection