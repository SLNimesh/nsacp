<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\ChannelDate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DateTime;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function getAll()
    {
        $apps = Appointment::all();
        // usort($apps, function ($a, $b) {
        //     return strtotime($a->time) == strtotime($b->time);
        // });
        return $apps;
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
        $date = ChannelDate::find($id);
        $channel = $date->channel;
        return view('reservations', [
            'date' => $date,
            'channel' => $channel,
        ]);
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
        $this->validate($request, [
            'patient' => 'required|string',
            'contactNumber' => 'required|string'
        ]);

        $date = ChannelDate::find($id);
        $app = new Appointment();
        $app->channelDate_id = $id;
        $app->user_id = Auth::user()->id;
        $app->patientName = $request->patient;
        $app->conntactNumber = $request->contactNumber;
        $app->comments = $request->specialNote;
        $app->patientAge = $request->age;
        $app->queueNo = ($date->currentAppointments) + 1;
        $minutesToAdd = 15 * (2 - $app->queueNo);
        $time = new DateTime($date->channel->time);
        $app->time = $time->modify("+{$minutesToAdd} minutes");

        if ($app->queueNo > $date->maximumCapacity) {
            $date->status = "CLOSED";
        } else {
            $date->currentAppointments = $app->queueNo;
            $app->save();
        }
        $date->save();

        return redirect('/home');
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
