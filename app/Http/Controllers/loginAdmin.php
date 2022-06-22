<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class loginAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('loginAdmin');
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
       
        $data = DB::table('user_models')->where('userName',$request->username)->first();
        if($data){
            if ($data->role=='1') {
                if($request->password){

                    session([
                        'SessionLoginAdmin' => "success"
                    ]);
    
                    return view('layout/layouts');
                }
            }elseif($data->role=="2"){
                if($request->password){

                    session([
                        'SessionLoginUser' => "success"
                    ]);
                    Session::put('id', $data->id);
                    Session::put('userName',$data->userName);
    
                    return view('index');
                }


            }else{
                return redirect()->route('loginAdmin.index'); 
            }

        }else{

            return redirect()->route('loginAdmin.index');
        }
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
        $request->session()->flush();
        return redirect()->route('loginAdmin.index');
   
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
