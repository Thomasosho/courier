<?php

namespace App\Http\Controllers;

use App\Models\Track;
use App\Models\Deposit;
use App\Models\Receipt;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $track = Track::paginate(10);
        return view('track.index', compact('track'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('track.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'start' => 'required',
            'current' => 'required',
            'destination' => 'required',
        ]);

        $track = new Track;
        $track->tracking_id = $request->input('tracking_id');
        $track->start = $request->input('start');
        $track->current = $request->input('current');
        $track->destination = $request->input('destination');
        $track->weight = $request->input('weight');
        $track->name = $request->input('name');
        $track->delivered_name = $request->input('delivered_name');
        $track->phone = $request->input('phone');
        $track->delivered_phone = $request->input('delivered_phone');
        $track->email = $request->input('email');
        $track->description = $request->input('description');
        $track->qty = $request->input('qty');
        $track->price = $request->input('price');
        $track->amount = $request->input('amount');
        $track->save();

        // $receipt = new Receipt;
        // $receipt->track_id = $request->input('tracking_id');
        // $receipt->save();

        // $describe = 'delivered to '.$request->input('delivered_name');
        // $date = Carbon::now();

        // $deposit = new Deposit;
        // $deposit->track_id = $request->input('tracking_id');
        // $deposit->depositor = $request->input('name');
        // $deposit->description = $describe;
        // $deposit->date = $date->toDateString();
        // $deposit->save();

        return back()->with('success', 'Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Track  $track
     * @return \Illuminate\Http\Response
     */
    public function show(Track $track)
    {
        return view('track.show', compact('track'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Track  $track
     * @return \Illuminate\Http\Response
     */
    public function edit(Track $tracks, $id)
    {
        $track = Track::find($id);
        return view('track.edit', compact('track'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Track  $track
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Track $tracks, $id)
    {
        $request->validate([
            'start' => 'required',
            'current' => 'required',
            'destination' => 'required',
        ]);

        $track = Track::find($id);
        $track->tracking_id = $track->tracking_id;
        $track->start = $request->input('start');
        $track->current = $request->input('current');
        $track->destination = $request->input('destination');
        $track->weight = $request->input('weight');
        $track->name = $request->input('name');
        $track->delivered_name = $request->input('delivered_name');
        $track->phone = $request->input('phone');
        $track->delivered_phone = $request->input('delivered_phone');
        $track->email = $request->input('email');
        $track->description = $request->input('description');
        $track->qty = $request->input('qty');
        $track->price = $request->input('price');
        $track->amount = $request->input('amount');
        $track->save();
        return back()->with('success', 'Created Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Track  $track
     * @return \Illuminate\Http\Response
     */
    public function destroy(Track $tracks, $id)
    {
        $track = Track::find($id);
        $track->delete();
        return back()->with('success', 'Deleted Successfully');
    }
}
