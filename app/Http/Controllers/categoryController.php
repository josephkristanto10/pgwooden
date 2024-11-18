<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use DataTables;
use Session;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Session::has("superuser")){
            $menu = "category";
            return view("admin.pages.category", compact("menu"));        
        }
        else{
            return redirect("/datacenter");
        }
    }

    public function see_table_all_category(){

            $data = Category::orderBy("category_id","desc")->get();
            return DataTables::of($data)->make(true);
        
    }
    public function upload_category(Request $request){
        
        $insert_product = Category::create([
            'name' => $request->add_category_name,
            'status'     => "on"
        ]);
        return response()->json(['status' => "200", 'message' => "ok"]);
    }

    public function delete_category(Request $request){
        $myid = $request->data_category;
        $status_product = Category::where("category_id","=",$myid)->get();
        $set_status = "on";
        if($status_product[0]->status == "on"){
            $set_status = "off";
        }
        $delete_product = Category::where("category_id","=",$myid)->update(["status"=>$set_status]);
        return response()->json(['status' => "200", 'message' => "ok"]);
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