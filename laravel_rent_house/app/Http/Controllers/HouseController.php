<?php

namespace App\Http\Controllers;

use App\City;
use App\House;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function index()
    {
        $house = House::paginate();
        dd($house);
    }

    public function create()
    {
    }

    public function add(Request $request)
    {
        $house = new House();
        $house->name = $request->name;
        if (!$request->hasFile("image")) {

            $house->image = $request->image;

        } else {

            $image = $request->file("image");

            $path = $image->store("images", "public");

            $house->image = $path;
        }
        $house->address = $request->address;
        $house->kindHouse = $request->kindHouse;
        $house->kindRoom = $request->kindRoom;
        $house->numBedroom = $request->numBedroom;
        $house->numBathroom = $request->numBathroom;
        $house->description = $request->description;
        $house->price = $request->price;
        $house->city_id = $request->city_id;
        $house->save();
    }

    public function edit($id)
    {
        $house = House::findOrFail($id);
        $cities = City::all();
        dd($house, $cities);
    }

    public function update(Request $request, $id)
    {
        $house = House::findOrFail($id);
        $house->name = $request->name;
        if (!$request->hasFile("image")) {

            $house->image = $request->image;

        } else {

            $image = $request->file("image");

            $path = $image->store("images", "public");

            $house->image = $path;
        }
        $house->address = $request->address;
        $house->kindHouse = $request->kindHouse;
        $house->kindRoom = $request->kindRoom;
        $house->numBedroom = $request->numBedroom;
        $house->numBathroom = $request->numBathroom;
        $house->description = $request->description;
        $house->price = $request->price;
        $house->city_id = $request->city_id;
        $house->save();
    }

    public function destroy($id)
    {
        $house = House::findOrFail($id);
        File::delete(storage_path('app/public/' . $house->image));
        $house->delete();
    }

    public function search()
    {

    }
}
