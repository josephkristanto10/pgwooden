<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimony;
use DataTables;
use Session;

class testimonyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Session::has("superuser")){
            $menu = "testimony";
            return view("admin.pages.testimony", compact("menu"));           
        }
        else{
            return redirect("/datacenter");
        }
    }

    public function upload_new_testimony(Request $request){
        $status = "";
        $errormes = "";

        if($request->file('add_testimony_image') != "" && $request->add_testimony_rating != ""  && $request->add_testimony_name != "" ){
            $status = "200";

            $insert_testimony = Testimony::create([
                'img'     => "-",
                'title'     => $request->add_testimony_name,
                'rating'     => $request->add_testimony_rating,
                'status'   => "on",
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $image = $request->file('add_testimony_image');
            $image_name = "testimony_".$insert_testimony->id.".".$image->getClientOriginalExtension();
            $update_testimony = Testimony::where("id","=",$insert_testimony->id)->update(["img" => $image_name]);
            // $image->storeAs('public/assets/images/product_from_db', $image_name);
            $image->move(public_path()."/assets/images/testimony_from_db",$image_name);
            $errormes = "ok";
        }
        else{
            $status = "500";
            $errormes = "Please fill all the requirement";
        }

        return response()->json(['status' => $status, 'message' => $errormes]);
    }

    public function delete_testimonys(Request $request){
       
            $myid = $request->data_testimony;
            $status_testimony = Testimony::where("id","=",$myid)->get();
            $set_status = "on";
            if($status_testimony[0]->status == "on"){
                $set_status = "off";
            }
            $delete_testi = Testimony::where("id","=",$myid)->update(["status"=>$set_status]);
            return response()->json(['status' => "200", 'message' => "ok"]);
        
    }

    public function see_table_all_testimony(){
        $data = Testimony::all();
        return DataTables::of($data)->make(true);
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