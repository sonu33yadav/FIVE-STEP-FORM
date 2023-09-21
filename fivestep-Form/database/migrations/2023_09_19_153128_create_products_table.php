<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('mainCategory');
            $table->string('subCategory');
            $table->string('Productname');
            $table->string('ProductType')->nullable();
            $table->text('summery')->nullable();
            $table->text('description');
            $table->string('hnsCode');
            $table->string('origin')->nullable();
            $table->string('sku');
            $table->string('gstRate');
            $table->string('productFrontImage');
            $table->string('productBackImage');
            $table->string('productFssaiImage');
            $table->string('veg-NonVeg-logo');
            $table->string('ingridientLogo');
            $table->string('productImage')->nullable();
            $table->string('productImage1')->nullable();
            $table->string('productImage2')->nullable();
            $table->text('videoCode1')->nullable();
            $table->text('videoCode2')->nullable();
            $table->text('videoCode3')->nullable();
            $table->text('videoCode4')->nullable();
            $table->string('mrp');
            $table->string('discount');
            $table->string('sellingPrice')->nullable();
            $table->string('min-qty');
            $table->string('max-qty');
            $table->string('cost-price')->nullable();
            $table->string('taxable');
            $table->string('taxRate');
            $table->string('taxAmount')->nullable();
            $table->string('netprice')->nullable();
            $table->string('type')->nullable();
            $table->string('weight')->nullable();
            $table->string('unite')->nullable();
            $table->string('mrp1')->nullable();
            $table->string('discount1')->nullable();
            $table->string('sellingPrice1')->nullable();
            $table->string('sku1')->nullable();
            $table->string('quantity')->nullable();
            $table->string('default')->nullable();
            $table->string('image')->nullable();
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
};
