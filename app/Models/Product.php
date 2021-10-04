<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Brand;
use App\Models\Category;
use App\Models\SubCategory;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "products";

    protected $fillable = [
        'brand_id',
        'category_id',
        'sub_category_id',
        'seller_sku_id',
        'name',
        //PRICE DETAILS
        'mrp',
        'msp',
        'procurement_sla',
        'stock',
        //Delivery Charges To Customer
        'local_delivery_charges',
        'regional_delivery_charges',
        'national_delivery_charges',
        //Product Size and Weight Details
        'weight',
        'weight_unit',
        'length',
        'length_unit',
        'breadth',
        'breadth_unit',
        'height',
        'height_unit',
        //Tax Details 
        'hsn_code',
        'tax_percentage',
        //Manufacturing Details
        'country_of_origin',
        'manufacturer_details',
        'packer_details',
        'importer_details',
        'minimum_age',
        'maximum_age',
        'ideal_for',
        'fabric',
        'color',
        //General Details
        'description',
        'key_features',
        'search_keywords',
        'status'
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
}
