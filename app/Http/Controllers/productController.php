<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\BestSeller;
use DataTables;
use Session;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // main view
    public function index_main(){
        // $menu = "product";
        $bestseller = BestSeller::join("product","product.id",'=','best_seller.id_product')->orderBy("order_number","asc")->get();
        $product = Product::all();
        return view("product", compact("product", "bestseller"));
    }
    // admin
    public function index() 
    {
        if(Session::has("superuser")){
            $menu = "product";
            return view("admin.pages.product", compact("menu"));           
        }
        else{
            return redirect("/datacenter");
        }
    }
      // index best seller admin
      public function index_best_seller_admin() 
      {
        $best_seller = BestSeller::orderBy("order_number", "asc")->get();

        $best_seller1 = $best_seller[0];
        $best_seller2 = $best_seller[1];
        $best_seller3 = $best_seller[2];

         $all_product = Product::orderBy("id","desc")->get();
          if(Session::has("superuser")){
              $menu = "bestsellerproduct";
              return view("admin.pages.bestsellerproduct", compact("menu","all_product","best_seller1","best_seller2","best_seller3"));           
          }
          else{
              return redirect("/datacenter");
          }
      }

    public function see_table_all_product(){
        $data = Product::all();
        return DataTables::of($data)->make(true);
    }
    public function update_best_sellers(Request $request){
        $data1 = $request->opsi1;
        $data2 = $request->opsi2;
        $data3 = $request->opsi3;
        
        $update_product = BestSeller::where("order_number","=",1)->update(["id_product" => $data1]);
        $update_product = BestSeller::where("order_number","=",2)->update(["id_product" => $data2]);
        $update_product = BestSeller::where("order_number","=",3)->update(["id_product" => $data3]);
        
        return response()->json(['status' => "200", 'message' => "ok"]);
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