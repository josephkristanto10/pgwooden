<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\BestSeller;
use App\Models\Category;
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
        $category = Category::where("category.status","=","on")->select("*")->get();
        $bestseller = BestSeller::join("product","product.id",'=','best_seller.id_product')->orderBy("order_number","asc")->get();
        $products = Product::where("product.status","=","on")->paginate(20);
        return view("product", compact("products", "bestseller", "category"));
    }
    // admin
    public function index() 
    {
        if(Session::has("superuser")){
            $category = Category::orderBy("category_id","desc")->get();
            $menu = "product";
            return view("admin.pages.product", compact("menu", "category"));           
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
        $data = Product::join("category","category.category_id","=","product.category_id")->select("product.*", "category.name as category_name")->orderBy("product.id","desc")->get();
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
        
        if($request->file('add_product_image') != "" && $request->add_product_name != "" && $request->add_product_price != "" && $request->add_product_desc != "" && $request->id_category != ""){
            $status = "200";

            $insert_product = Product::create([
                'category_id' => $request->id_category,
                'img'     => "-",
                'img_second'     => "-",
                'img_third'     => "-",
                'name'     => $request->add_product_name,
                'description'     => $request->add_product_desc,
                'price'     => $request->add_product_price,
                'status'   => "on",
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $image = $request->file('add_product_image');
            $image2 = $request->file('add_product_image_second');
            $image3 = $request->file('add_product_image_third');
            $image_name = "product_".$insert_product->id."_1.".$image->getClientOriginalExtension();
            $image_name2 = "product_".$insert_product->id."_2.".$image2->getClientOriginalExtension();
            $image_name3 = "product_".$insert_product->id."_3.".$image3->getClientOriginalExtension();

            $update_product = Product::where("id","=",$insert_product->id)->update(["img" => $image_name, "img_second" => $image_name2, "img_third" => $image_name3]);
            // $image->storeAs('public/assets/images/product_from_db', $image_name);
            $image->move(public_path()."/assets/images/product_from_db",$image_name);
            $image2->move(public_path()."/assets/images/product_from_db",$image_name2);
            $image3->move(public_path()."/assets/images/product_from_db",$image_name3);
            $errormes = "ok";
        }
        else{
            $status = "500";
            $errormes = "Please fill all the requirement";
        }

        return response()->json(['status' => $status, 'message' => $errormes]);
    }

    public function delete_products(Request $request){
        $myid = $request->data_product;
        $status_product = Product::where("id","=",$myid)->get();
        $set_status = "on";
        if($status_product[0]->status == "on"){
            $set_status = "off";
        }
        $delete_product = Product::where("id","=",$myid)->update(["status"=>$set_status]);
        return response()->json(['status' => "200", 'message' => "ok"]);
    }
    public function fetch_data(Request $request){
        $idcategory = $request->category;
        $kata_kunci = "";
        if($request->keyword){
            $kata_kunci = $request->keyword;
        }
        
            if($request->ajax())
            {
          
                    if($idcategory == 0){
                        // All Product
                      
                        if($kata_kunci == "") {
                              // All Product, no keyword, no category
                              $products =  Product::leftJoin("category", "category.category_id",'=',"product.category_id")->where("product.status", "=","on")->latest('product.id')->select("product.*","category.name as category_name", "category.category_id")->paginate(20);
                        }
                        else{
                               // All Product, with keyword, no category
                               $products =  Product::leftJoin("category", "category.category_id",'=',"product.category_id")->where("product.status", "=","on")->where("product.name",'like',"%".$kata_kunci."%")->latest('product.id')->select("product.*","category.name as category_name", "category.category_id")->paginate(20);

                        }
                    }
                    else{
                        // All Product, no keyword, with Category
                        if($kata_kunci == "") {
                            $products =  Product::leftJoin("category", "category.category_id",'=',"product.category_id")->where("category.category_id","=", $idcategory)->where("product.status", "=","on")->latest('product.id')->select("product.*","category.name as category_name", "category.category_id")->paginate(20);    
                        }
                        else{
                            $products =  Product::leftJoin("category", "category.category_id",'=',"product.category_id")->where("category.category_id","=", $idcategory)->where("product.status", "=","on")->where("product.name",'like',"%".$kata_kunci."%")->latest('product.id')->select("product.*","category.name as category_name", "category.category_id")->paginate(20);    
                        }
                    }

                return view('product_card', compact('products'))->render();
            }
        
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