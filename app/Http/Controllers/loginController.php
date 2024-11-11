<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use Hash;
use Session;

class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //    Session::flush();
       return view("admin.pages.signin");
    }
    public function login_checks(Request $request){
        
        $username = $request->username;
        $password = $request->pwd;
        // $encrypted = bcrypt($request->password);
        $status = "500";
        $errormes = "error";
        $usercheck_fromdb = Login::where("user", "=",$username)->select("*")->first();
        if($usercheck_fromdb){
            if (Hash::check($password, $usercheck_fromdb->password)) {
                $status = "200";
                $errormes = "ok";
                Session::flush();
                Session::put('superuser', "yes");
                
            }
            else{
                $status = "500";
                $errormes = "error";
            }
        
        }
        return response()->json(['status' => $status, 'message' => $errormes]);
        // $encrypted = bcrypt($password);

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