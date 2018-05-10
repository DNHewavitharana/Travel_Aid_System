<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;

class HotelBookingController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('hotel_booking.index');
    }

    public function payment()
    {
        //return view('hotelBooking.payment');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function review(Request $request)
    {
        return view('hotel_booking.review',['data'=>$request]);
    }

    public function view(Request $request)
    {

        $room_details = DB::table('hotels')
            ->join('rooms', 'hotels.id', '=', 'rooms.hotel_id')
            ->where('hotels.id', $request->input('hotel_id'))
            ->get();

        return view('hotel_booking.view', ['room_details' => $room_details], ['resultHotels' => $request]);
    }


    public function search(Request $request)
    {

        $hotels = Hotel::where('city', $request->input('location'))->get();

        return view('hotel_booking.show', ['hotels' => $hotels], ['search_detail' => $request]);       //view the results of the hotel search

    }

    public function create()
    {
        return view('hotel_booking.create');

    }
    public function addRoom(Request $request)
    {
        $id= $request->input('hotel_id');
        $photo_room = "";
       if($request->hasFile('photo')){
           $destinationPath="images/hotel";
           $file=$request->photo;
           $extension=$file->getClientOriginalExtension();
           $fileName=rand(10000,99999).".".$extension;
           $file->move($destinationPath,$fileName);
           $photo_room =$fileName;
        }

        $room1 = Room::create([
            'hotel_id' => $id,
            'room_img' => $photo_room,
            'room_name' => $request->input('name1'),
            'room_type' => $request->input('type1'),
            'no_rooms_available' => $request->input('rooms1'),
            'capacity' =>$request->input('capacity1'),
            'price' => $request->input('amount1')
        ]);



        return view('hotel_booking.addRoom',['hotelID'=>$id]);     //view the payment form
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $photo = "";
        if($request->hasFile('photo')){
            $destinationPath="images/hotel";
            $file=$request->photo;
            $extension=$file->getClientOriginalExtension();
            $fileName=rand(1111,9999).".".$extension;
            $file->move($destinationPath,$fileName);
            $photo =$fileName;
        }

      $hotel = Hotel::create([
          'name' => $request->input('hotel_name'),
          'img' => $photo,
          'country' => $request->input('country'),
          'address' =>$request->input('address'),
          'city' => $request->input('city'),
          'room_price' => $request->input('hotel_price')
      ]);
        $hotel_search=Hotel::where('name', $request->input('hotel_name'))->first();
        $hotelID=$hotel->id;
       if($hotel){
           return view('hotel_booking.addRoom',['hotelID'=>$hotelID]);     //view the payment form
        }

    }






    public function allHotel()
    {
        $hotels =  Hotel::all();

        return view('hotel_booking.allHotel',['hotels' => $hotels]);

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        $hotel=Hotel::Find($hotel);
        $room=Room::Find($hotel);

        return view('hotel_booking.show',['hotel'=>$hotel],['room'=>$room]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        //
    }
}
