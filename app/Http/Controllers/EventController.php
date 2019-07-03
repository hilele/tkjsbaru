<?php

namespace App\Http\Controllers;

// use auth;
use App\Event;
use App\Kegiatan;
use App\auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = DB::table('events')->select('*')->get();
        return view('event', compact('event'));
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

        $event = new Event();
        //fill the object
        $event->namaEvent = $request->get('namaEvent');
        $event->tanggalMulai = $request->get('startDate');
        $event->perkiraanSelesai = $request->get('endDate');
        $event->deskripsiEvent = $request->get('deskripsiEvent');
        $event->createdBy = 'auth::user()->name';

        $event->save();
        return redirect('/admin/event')->with('success', 'Event berhasil dibuat');;

        // echo "string";
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

    public function detail($id){
        $detailEvent = DB::table('events')->select('*')->where('idEvent',$id)->get();
        $detailEvent[0]->newStart = date('m/d/Y', strtotime($detailEvent[0]->tanggalMulai));
        $detailEvent[0]->newEnd = date('m/d/Y', strtotime($detailEvent[0]->perkiraanSelesai));

        $kegiatan = DB::table('kegiatans')
        ->where([
            ['idEvent','=', $id],
            ['isDeleted','=0']
        ])
        ->select('*')->get();

        // for($i = 0; $i<count($kegiatan); $i++) {
        //     $split = explode(' ', $kegiatan[$i]->tanggalWaktuKegiatans);
        //     $kegiatan[$i]->tanggal = $split[0];
        //     $kegiatan[$i]->waktu = $split[1];
        // }
        // $detailEvent[0]->y = 'a';
        // echo json_encode($detailEvent[0]);
        return view ('updateEvent', compact('detailEvent', 'kegiatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        DB::table('events')
            ->where('idEvent', $request->post('idEvent'))
            ->update([
                'namaEvent' => $request->post('namaEvent'),
                'deskripsiEvent' => $request->post('deskripsiEvent'),
                'tanggalMulai' => $request->post('startDate'),
                'perkiraanSelesai' => $request->post('endDate')
            ]);
        // print_r($event);
        return redirect('admin/event/detail/'.$request->post('idEvent')); // Set redirect ketika berhasil

    }

    // public function tambahKegiatan(Request $request)
    // {
    //   DB::table('event_kegiatans')

    // }

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
    // comment batas /////////////////////////////////////////////////////////////////////////////////////////////////////
}
