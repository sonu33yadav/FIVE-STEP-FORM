<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
        'mainCategory',
        'subCategory',
        'Productname',
        'ProductType',
        'summery',
        'description',
        'hnsCode',
        'origin',
        'sku',
        'gstRate',
        'videoCode1',
        'videoCode2',
        'videoCode3',
        'videoCode4',
        'mrp',
        'discount',
        'sellingPrice',
        'min-qty',
        'max-qty',
        'cost-price',
        'taxable',
        'taxRate',
        'taxAmount',
        'netprice',
        'type',
        'weight',
        'unite',
        'mrp1',
        'discount1',
        'sellingPrice1',
        'sku1',
        'quantity',
        'default',
        'productFrontImage',
        'productBackImage',
        'productFssaiImage',
        'veg-NonVeg-logo',
        'ingridientLogo',
        'productImage',
        'productImage1',
        'productImage2',
        'image',
    ];
}
