<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\PlaneSchedule;
use App\Card;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PlaneScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today = Carbon::today();
        return view('plane_schedules.index', ['today'=>$today]);                                        //view the plane search page
    }


    public function review(Request $request)
    {
        return view('plane_schedules.review',['data'=> $request]);     //view the payment form
    }


    public function checker(Request $request)
    {
        $exists = DB::table('cards')->where('number',$request->input('cardNumber'))->first();

        if ($exists){
            $today = Carbon::today();

            return redirect()->route('plane_schedules.index', ['today'=>$today])
                ->with('success' , 'Payment Done Successfully');
        }
        return back()->withInput()->with('errors', 'Error creating new company');
    }

    public function search(Request $request){

        $date1 = $request->input('departure_date');
        $date = date('l', strtotime($date1));

        $searchResult = DB::table('planes')
            ->join('airlines', 'planes.airline_id', '=', 'airlines.id')
            ->join('plane_schedules', 'planes.plane_id', '=', 'plane_schedules.plane_id')
            ->where('takeoff_airport', $request->input('takeoff_airport'))
            ->where('day', $date)
            ->where('landing_airport', $request->input('landing_airport'))
            ->get();

        if ($searchResult){
            return view('plane_schedules.show', ['searchResult' => $searchResult],['searchData'=> $request]); //view the results of the plane search
        }
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
     * @param  \App\PlaneSchedule  $planeSchedule
     * @return \Illuminate\Http\Response
     */
    public function show(PlaneSchedule $planeSchedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PlaneSchedule  $planeSchedule
     * @return \Illuminate\Http\Response
     */
    public function edit(PlaneSchedule $planeSchedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PlaneSchedule  $planeSchedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PlaneSchedule $planeSchedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PlaneSchedule  $planeSchedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlaneSchedule $planeSchedule)
    {
        //
    }
}
