<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;
use Illuminate\Support\Facades\DB;

class PurchaseController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $brand = DB::table('brand')->get();
        $product = DB::table('product')->get();
        $supplier = DB::table('supplier')->get();

        return view('purchase')->with("brand", $brand)->with("product", $product)->with("supplier", $supplier);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $find_product = DB::table('purchase')->where("product_name", $request->product_name)->get();




        foreach ($find_product as $value) {

            if ($value->product_name == $request->product_name && $value->brand_name == $request->brand_name && $value->supplier_name == $request->supplier_name && $value->purchase_price == $request->purchase_price && $value->sale_price == $request->sale_price) {

                $updated_quantity = $value->product_quantity + $request->product_quantity;
                $purchase_update = Purchase::find($value->purchase_id);
                $purchase_update['product_name'] = $request->product_name;
                $purchase_update['brand_name'] = $request->brand_name;
                $purchase_update['supplier_name'] = $request->supplier_name;
                $purchase_update['product_quantity'] = $updated_quantity;
                $purchase_update['purchase_price'] = $request->purchase_price;
                $purchase_update['sale_price'] = $request->sale_price;
                $purchase_update->update();

                $brand = DB::table('brand')->get();
                $product = DB::table('product')->get();
                $supplier = DB::table('supplier')->get();
                return view('purchase')->with("brand", $brand)->with("product", $product)->with("supplier", $supplier);

                break;
            }
        }

        $purchase = new Purchase;
        $purchase['product_name'] = $request->product_name;
        $purchase['brand_name'] = $request->brand_name;
        $purchase['supplier_name'] = $request->supplier_name;
        $purchase['product_quantity'] = $request->product_quantity;
        $purchase['purchase_price'] = $request->purchase_price;
        $purchase['sale_price'] = $request->sale_price;
        $purchase->save();

        $brand = DB::table('brand')->get();
        $product = DB::table('product')->get();
        $supplier = DB::table('supplier')->get();
        return view('purchase')->with("brand", $brand)->with("product", $product)->with("supplier", $supplier);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request) {

        $purchase = DB::table('purchase')->get();
        return view('stoke')->with("purchase", $purchase);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
