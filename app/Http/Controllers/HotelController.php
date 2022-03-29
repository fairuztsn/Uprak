<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("hotels");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("create");
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
        $hotel = new Hotel();

        $hotel->name = $request->input("name");
        $hotel->location = $request->input("location");
        $hotel->price_per_night = $request->input("price_per_night");

        // Image processing
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/images/',$filename);
            $hotel->image = $filename;
        }
        // Image processing

        // Facilities

            $facilities = [
                $request->input("facilities1"),
                $request->input("facilities2"),
                $request->input("facilities3"),
                $request->input("facilities4"),
                $request->input("facilities5"),
                $request->input("facilities6"),
            ];
            $hotel->facilities = implode(", ", $facilities);
        // Facilities

        $hotel->synopsis = $request->input("synopsis");

        $hotel->save();

        return redirect("hotels")->with('status', 'Hotel added successfully');

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
        $hotels = Hotel::find($id);
        return view("edit", ["hotels"=>$hotels]);
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
        $hotel = Hotel::find($id);

        $hotel->name = $request->input("name");
        $hotel->location = $request->input("location");
        $hotel->price_per_night = $request->input("price_per_night");

        // Facilities

            $facilities = [
                $request->input("facilities1"),
                $request->input("facilities2"),
                $request->input("facilities3"),
                $request->input("facilities4"),
                $request->input("facilities5"),
                $request->input("facilities6"),
            ];
            $hotel->facilities = implode(", ", $facilities);
        // Facilities

        $hotel->synopsis = $request->input("synopsis");

        $hotel->update();

        return redirect("hotels")->with('status', 'Hotel edited successfully');
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
        $hotels = Hotel::find($id)->delete();
        return redirect("hotels");
    }
}
