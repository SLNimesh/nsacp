<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Center;
use App\Models\Channel;
use App\Models\ChannelDate;
use DateTime;

class ChannelingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $centers = Center::all();
        $channels = Channel::all();
        return view('channels', [
            'centers' => $centers,
            'channels' => $channels
        ]);
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
        $this->validate($request, [
            'dayOfWeek' => 'required|string',
            'doctor' => 'required|string',
            'venue' => 'required|string',
            'maximumCap' => 'required|numeric'
        ]);

        $channel = new Channel();
        $channel->dayOfWeek = $request->dayOfWeek;
        $channel->doctor = $request->doctor;
        $channel->venue = $request->venue;
        $channel->maximumCapacity = $request->maximumCap;
        $channel->status = 'ACTIVE';
        if ($request->time != null) {
            $channel->time = $request->time;
        } else {
            $channel->time = '16:00:00';
        }
        $channel->save();

        $today = new DateTime();
        $endDate = new DateTime('+1 month');

        for($i = $today; $i <= $endDate; $i->modify('+1 day')){
            $day = $i->format('l');
            if ($day == $channel->dayOfWeek) {
                $date = new ChannelDate();
                $date->channel_id = $channel->id;
                $date->date = $i;
                $date->status = 'OPEN';
                $date->currentAppointments = 0;
                $date->maximumCapacity = $channel->maximumCapacity;
                $date->save();
            }
        }

        return redirect('/channeling');
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
