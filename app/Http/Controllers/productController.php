<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use DataTables;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = "product";
        return view("admin.pages.product", compact("menu"));
    }

    public function see_table_all_product(){
        $data = Product::all();
        return DataTables::of($data)->make(true);
    }
    public function upload_new_product(Request $request){
        $status = "";
        $errormes = "";
        
        if($request->file('add_product_image') != "" && $request->add_product_name != "" && $request->add_product_price != "" && $request->add_product_desc != "" ){
            $status = "200";

            $insert_product = Product::create([
                'img'     => "-",
                'name'     => $request->add_product_name,
                'description'     => $request->add_product_desc,
                'price'     => $request->add_product_price,
                'status'   => "on",
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $image = $request->file('add_product_image');
            $image_name = "product_".$insert_product->id.".".$image->getClientOriginalExtension();
            $update_product = Product::where("id","=",$insert_product->id)->update(["img" => $image_name]);
            // $image->storeAs('public/assets/images/product_from_db', $image_name);
            $image->move(public_path()."/assets/images/product_from_db",$image_name);
            $errormes = "ok";
        }
        else{
            $status = "500";
            $errormes = "Please fill all the requirement";
        }

        return response()->json(['status' => $status, 'message' => $errormes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}