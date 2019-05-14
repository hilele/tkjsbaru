<?php

namespace App\Http\Controllers;

// use auth;
use App\Event;
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
        // create new object event
        // $this->validate($request, [
        //     'namaEvent' => 'required',
        //     'tanggalMulai' => 'required',
        //     'perkiraanSelesai' => 'required',
        // ]);
        // dd($request->all());

        $event = new Event();
        //fill the object
        $event->namaEvent = $request->get('namaEvent');
        $event->tanggalMulai = $request->get('startDate');
        $event->perkiraanSelesai = $request->get('endDate');
        $event->deskripsiEvent = $request->get('deskripsiEvent');
        $event->createdBy = "bambang";

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

    public function detail(){
        return view ('updateEvent', ['r']);
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
        $this->validate($request, [
            'namaEvent' => 'required',
            'tanggalMulai' => 'required',
            'perkiraanSelesai' => 'required',

        ]);
        $event= Event::find($id);

        $event->namaEvent = $request->namaEvent;
        $event->tanggalMulai = $request->tanggalMulai;
        $event->perkiraanSelesai = $request->perkiraanSelesai;
        $event->deskripsiEvent = $request->deskripsiEvent;
        $event->save();
        Session::flash('message', 'Sukses mengubah data kegiatan !');
        return redirect('/kegiatan'); // Set redirect ketika berhasil
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
