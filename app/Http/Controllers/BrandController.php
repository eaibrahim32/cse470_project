<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('add_brand');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $brand = new Brand;
        $brand['brand_name'] = $request->brand_name;
        $brand['product_country'] = $request->brand_country;

        $brand->save();

        return view('add_brand');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show() {

        $brand = DB::table('brand')->get();
        return view('manage_brand')->with("brand", $brand);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request) {

        $brand = DB::table('brand')->where('brand_id', $request->brand_id)->get();
        return view('edit_brand')->with("brand", $brand);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {


        $brand = Brand::find($id);
        $brand ['brand_name'] = $request->brand_name;
        $brand ['product_country'] = $request->product_country;
        $brand->update();

        return redirect('manage-brand');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request) {

        DB::table('brand')->where('brand_id', $request->brand_id)->delete();

        return redirect('/manage-brand');
    }

}
