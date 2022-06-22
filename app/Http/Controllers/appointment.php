<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class appointment extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tg = date('d-m-Y');
        
         $data = DB::table('jadwals')
                ->join('dokter_models','jadwals.id_dokfk','dokter_models.idDokter')
                ->where('jadwals.status',1)->WHERE('jadwals.hari',">",'tg')->select('jadwals.*','dokter_models.namaDokter')->get();
   
              
         return view ('viewjadwal',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        $tg = date('d-m-Y');
        
        $data = DB::table('jadwals')
               ->join('dokter_models','jadwals.id_dokfk','dokter_models.idDokter')
               ->where('jadwals.status',1)->WHERE('jadwals.hari','>=','tg')->select('jadwals.*','dokter_models.namaDokter')->get();
  
         return view ('formAppointment');
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
