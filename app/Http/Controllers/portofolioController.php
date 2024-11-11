<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio;
use DataTables;
use Session;

class portofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_main(){
        $portofolio = Portofolio::all();
        return view("portofolio", compact("portofolio"));
    }
    public function index()
    {
        if(Session::has("superuser")){
            $menu = "portofolio";
            return view("admin.pages.portofolio", compact("menu"));        
        }
        else{
            return redirect("/datacenter");
        }
    
    }

    public function see_table_all_porto(){
        $data = Portofolio::orderBy("id","desc")->get();
        return DataTables::of($data)->make(true);
    }

    public function upload_new_portofolio(Request $request){
     
    
        $status = "";
        $errormes = "";
        if($request->file('add_porto_image') || $request->add_porto_name != ""){
            $status = "200";

            $insert_porto = Portofolio::create([
                'img'     => "-",
                'name'     => $request->add_porto_name,
                'description'     => "-",
                'status'   => "on",
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $image = $request->file('add_porto_image');
            $image_name = "porto_".$insert_porto->id.".".$image->getClientOriginalExtension();
            $update_porto = Portofolio::where("id","=",$insert_porto->id)->update(["img" => $image_name]);
            // $image->storeAs('public/assets/images/portofolio_from_db', $image_name);
            $image->move(public_path()."/assets/images/portofolio_from_db",$image_name);
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