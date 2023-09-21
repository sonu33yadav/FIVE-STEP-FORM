<?php

namespace App\Http\Controllers;

use App\Models\product;
use File;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addProduct(Request $request, product $PRODUCT)
    {

        // dd($request);
        $file1 = $request->file('productFrontImage');
        $file2 = $request->file('productBackImage');

        $file3 = $request->file('productFssaiImage');
        $file4 = $request->file('veg-NonVeg-logo');
        $file5 = $request->file('ingridientLogo');
        $file6 = $request->file('productImage');
        $file7 = $request->file('productImage1');
        $file8 = $request->file('productImage2');
        $file9 = $request->file('image');

        $product                  = [];
        $product['mainCategory']  = $request->get('maincategory');
        $product['subCategory']   = $request->get('subCategory');
        $product['Productname']   = $request->get('Productname');
        $product['ProductType']   = $request->get('ProductType');
        $product['summery']       = $request->get('summery');
        $product['description']   = $request->get('description');
        $product['hnsCode']       = $request->get('hnsCode');
        $product['origin']        = $request->get('origin');
        $product['sku']           = $request->get('sku');
        $product['gstRate']       = $request->get('gstRate');
        $product['videoCode1']    = $request->get('vedioCode1');
        $product['videoCode2']    = $request->get('vedioCode2');
        $product['videoCode3']    = $request->get('vedioCode3');
        $product['videoCode4']    = $request->get('vedioCode4');
        $product['mrp']           = $request->get('mrp');
        $product['discount']      = $request->get('discount');
        $product['sellingPrice']  = $request->get('sellingPrice;');
        $product['min-qty']       = $request->get('min-qty');
        $product['max-qty']       = $request->get('max-qty');
        $product['cost-price']    = $request->get('cost-price');
        $product['taxable']       = $request->get('taxable');
        $product['taxRate']       = $request->get('taxRate');
        $product['taxAmount']     = $request->get('taxAmount');
        $product['netprice']      = $request->get('netprice');
        $product['type']          = $request->get('type');
        $product['weight']        = $request->get('weight');
        $product['unite']         = $request->get('unite');
        $product['mrp1']          = $request->get('mrp1');
        $product['discount1']     = $request->get('discount1');
        $product['sellingPrice1'] = $request->get('sellingPric;e1');
        $product['sku1']          = $request->get('sku1');
        $product['quantity']      = $request->get('quantity');
        $product['default']       = $request->get('default');

        if ($file1 != null) {
            $extension = File::extension($file1->getClientOriginalName());
            # upload file before processing it.
            $fileName   = $file1->getClientOriginalName();
            $uplodePath = base_path('/public/') . '/' . $file1->getClientOriginalName();
            if (!$file1->move($uplodePath, $file1->getClientOriginalName())) {
                throw new Exception("Failed to uplaode file. File size too large", Response::HTTP_UNPROCESSABLE_ENTITY);
            }
            $product['productFrontImage'] = $file1->getClientOriginalName();
        }
        if ($file2 != null) {
            $extension = File::extension($file2->getClientOriginalName());
            # upload file before processing it.
            $fileName = $file2->getClientOriginalName();
            //dd($fileName);
            $uplodePath = base_path('/public/') . '/' . $file2->getClientOriginalName();
            if (!$file2->move($uplodePath, $file2->getClientOriginalName())) {
                throw new Exception("Failed to uplaode file. File size too large", Response::HTTP_UNPROCESSABLE_ENTITY);
            }
            $product['productBackImage'] = $fileName;
        }
        if ($file3 != null) {
            $extension = File::extension($file3->getClientOriginalName());
            # upload file before processing it.
            $fileName   = $file3->getClientOriginalName();
            $uplodePath = base_path('/public/') . '/' . $file3->getClientOriginalName();
            if (!$file3->move($uplodePath, $file3->getClientOriginalName())) {
                throw new Exception("Failed to uplaode file. File size too large", Response::HTTP_UNPROCESSABLE_ENTITY);
            }
            $product['productFssaiImage'] = $file3->getClientOriginalName();
        }
        if ($file4 != null) {
            $extension = File::extension($file4->getClientOriginalName());
            # upload file before processing it.
            $fileName   = $file4->getClientOriginalName();
            $uplodePath = base_path('/public/') . '/' . $file4->getClientOriginalName();
            if (!$file4->move($uplodePath, $file4->getClientOriginalName())) {
                throw new Exception("Failed to uplaode file. File size too large", Response::HTTP_UNPROCESSABLE_ENTITY);
            }
            $product['veg-NonVeg-logo'] = $file4->getClientOriginalName();
        }
        if ($file5 != null) {
            $extension = File::extension($file5->getClientOriginalName());
            # upload file before processing it.
            $fileName   = $file5->getClientOriginalName();
            $uplodePath = base_path('/public/') . '/' . $file5->getClientOriginalName();
            if (!$file5->move($uplodePath, $file5->getClientOriginalName())) {
                throw new Exception("Failed to uplaode file. File size too large", Response::HTTP_UNPROCESSABLE_ENTITY);
            }
            $product['ingridientLogo'] = $file5->getClientOriginalName();
        }
        if ($file6 != null) {
            $extension = File::extension($file6->getClientOriginalName());
            # upload file before processing it.
            $fileName   = $file6->getClientOriginalName();
            $uplodePath = base_path('/public/') . '/' . $file6->getClientOriginalName();
            if (!$file6->move($uplodePath, $file6->getClientOriginalName())) {
                throw new Exception("Failed to uplaode file. File size too large", Response::HTTP_UNPROCESSABLE_ENTITY);
            }
            $product['productImage'] = $file6->getClientOriginalName();
        }
        if ($file7 != null) {
            $extension = File::extension($file7->getClientOriginalName());
            # upload file before processing it.
            $fileName   = $file7->getClientOriginalName();
            $uplodePath = base_path('/public/') . '/' . $file7->getClientOriginalName();
            if (!$file7->move($uplodePath, $file7->getClientOriginalName())) {
                throw new Exception("Failed to uplaode file. File size too large", Response::HTTP_UNPROCESSABLE_ENTITY);
            }
            $product['productImage1'] = $file7->getClientOriginalName();
        }
        if ($file8 != null) {
            $extension = File::extension($file8->getClientOriginalName());
            # upload file before processing it.
            $fileName   = $file8->getClientOriginalName();
            $uplodePath = base_path('/public/') . '/' . $file8->getClientOriginalName();
            if (!$file8->move($uplodePath, $file8->getClientOriginalName())) {
                throw new Exception("Failed to uplaode file. File size too large", Response::HTTP_UNPROCESSABLE_ENTITY);
            }
            $product['productImage2'] = $file8->getClientOriginalName();
        }
        if ($file9 != null) {
            $extension = File::extension($file9->getClientOriginalName());
            # upload file before processing it.
            $fileName   = $file9->getClientOriginalName();
            $uplodePath = base_path('/public/') . '/' . $file9->getClientOriginalName();
            if (!$file9->move($uplodePath, $file9->getClientOriginalName())) {
                throw new Exception("Failed to uplaode file. File size too large", Response::HTTP_UNPROCESSABLE_ENTITY);
            }
            $product['image'] = $file9->getClientOriginalName();
            $PRODUCT->create($product);

        } else {
            $PRODUCT->create($product);
        }
        return response()->json(['msg' => "All Images uploaded and data submited"], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getproducts(product $PRODUCT)
    {
        $products = product::all();
        if (!empty($products)) {
            return response()->json($products, 200);
        } else {
            return response()->json(['msg' => "No pRoducts Found"], 400);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }
}
