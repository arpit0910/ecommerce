<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->foreignId('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreignId('sub_category_id')->references('id')->on('sub_categories')->onDelete('cascade');
            $table->string('seller_sku_id');
            $table->text('name');
            //PRICE DETAILS
            $table->decimal('mrp');
            $table->decimal('msp')->nullable();
            $table->integer('procurement_sla')->nullable();
            $table->decimal('stock')->nullable();
            //Delivery Charges To Customer
            $table->decimal('local_delivery_charges')->nullable();
            $table->decimal('regional_delivery_charges')->nullable();
            $table->decimal('national_delivery_charges')->nullable();
            //Product Size and Weight Details
            $table->decimal('weight')->nullable();
            $table->string('weight_unit')->nullable();
            $table->decimal('length')->nullable();  
            $table->string('length_unit')->nullable();
            $table->decimal('breadth')->nullable();
            $table->string('breadth_unit')->nullable();
            $table->decimal('height')->nullable();
            $table->string('height_unit')->nullable();
            //Tax Details 
            $table->string('hsn_code')->nullable();
            $table->decimal('tax_percentage')->nullable();
            //Manufacturing Details
            $table->string('country_of_origin')->nullable();
            $table->text('manufacturer_details')->nullable();
            $table->text('packer_details')->nullable();
            $table->text('importer_details')->nullable();
            $table->integer('minimum_age')->nullable();
            $table->integer('maximum_age')->nullable();
            $table->string('ideal_for')->nullable();
            $table->string('fabric')->nullable();
            $table->string('color')->nullable();
            //General Details
            $table->text('description')->nullable();
            $table->text('key_features')->nullable();
            $table->text('search_keywords')->nullable();
            $table->boolean('status')->default(1);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
