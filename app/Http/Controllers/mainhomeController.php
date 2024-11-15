<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MainWebsite;
use DataTables;
use Session;

class mainhomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Session::has("superuser")){
            $all_Data = MainWebsite::all();
            $menu = "mainhome";
            return view("admin.pages.mainhome", compact("menu","all_Data"));    
        }
        else{
            return redirect("/datacenter");
        }

    }
    public function update_background_utama(Request $request){
        $image = $request->file('file_image');
        $image_name = "bgutama.".$image->getClientOriginalExtension();
        $update_product = MainWebsite::where("id","=",1)->update(["img_slogan" => $image_name]);
        // $image->storeAs('public/assets/images/product_from_db', $image_name);
        $image->move(public_path()."/assets/images/mainhome_from_db",$image_name);
        return response()->json(['status' => "200", 'message' => $image_name]);
    }

    public function update_background_aboutus(Request $request){
        $image = $request->file('file_image');
        $image_name = "bgaboutus.".$image->getClientOriginalExtension();
        $update_product = MainWebsite::where("id","=",1)->update(["img_about_us" => $image_name]);
        // $image->storeAs('public/assets/images/product_from_db', $image_name);
        $image->move(public_path()."/assets/images/mainhome_from_db",$image_name);
        return response()->json(['status' => "200", 'message' => $image_name]);
    }

    public function update_background_tagline(Request $request){
        $image = $request->file('file_image');
        $image_name = "bgtagline.".$image->getClientOriginalExtension();
        $update_product = MainWebsite::where("id","=",1)->update(["img_tagline" => $image_name]);
        // $image->storeAs('public/assets/images/product_from_db', $image_name);
        $image->move(public_path()."/assets/images/mainhome_from_db",$image_name);
        return response()->json(['status' => "200", 'message' => $image_name]);
    }
    public function update_summary(Request $request){
        $data1 = $request->client;
        $data2 = $request->proyek;
        $data3 = $request->lokasi;
        
        $update_product = MainWebsite::where("id","=",1)->update(["summary_client" => $data1]);
        $update_product = MainWebsite::where("id","=",1)->update(["summary_project" => $data2]);
        $update_product = MainWebsite::where("id","=",1)->update(["summary_location" => $data3]);
        
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