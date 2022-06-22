<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class jadwal extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('jadwals')
        ->join('dokter_models','dokter_models.idDokter','jadwals.id_dokfk')
        ->orderby('jadwals.id_dokfk')
        ->get();
        return view('jadwal.viewJadwal', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $data= DB::table('dokter_models')->get();
     return view('jadwal/index',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $i=0;
        $z=[];
        $sesi = $request->sesi;
        if($sesi != null){
        foreach ($sesi as $m){

            $z[$i] = $m;
            $i++;
        }
        $t = '1';
        for($x=0;$x<$i;$x++){
            DB::table('jadwals')->insert([
                'id_dokfk'=>$request->dokter,
                'hari'=>$request->hari,
                'jam'=>$z[$x],
                'status'=>$t
           ]);
        }
         $data = DB::table('jadwals')
         ->join('dokter_models','dokter_models.idDokter','jadwals.id_dokfk')
         ->orderby('jadwals.id_dokfk')
         ->get();
         return view('jadwal.viewJadwal', compact('data'));

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
