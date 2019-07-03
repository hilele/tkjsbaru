<?php

namespace App\Http\Controllers;

use App\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo var_dump(url()->current());
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
        $kegiatan = new Kegiatan();
        $kegiatan->namaKegiatan = $request->get('namaKegiatan');
        $kegiatan->tanggalKegiatan = $request->get('tanggalKegiatan');
        $kegiatan->waktuKegiatan = $request->get('waktuKegiatan');
        $kegiatan->idEvent = $request->get('idEvent');
        $kegiatan->save();

        return redirect ('admin/detail/{id}');
    }

    public function deleteKegiatan($id){
        $kegiatan = DB::table('kegiatans')
        ->where('idKegiatan', $id)
        ->update([
            'isDeleted' => 1
        ]);
        $kegiatan2 = DB::table('kegiatans')
        ->where('idKegiatan', $id)
        ->select('idEvent')->get();
        return redirect ('admin/event/detail/'.$kegiatan2[0]->idEvent);
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
