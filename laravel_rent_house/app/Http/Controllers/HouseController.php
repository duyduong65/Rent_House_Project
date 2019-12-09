<?php

namespace App\Http\Controllers;

use App\City;
use App\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HouseController extends Controller
{
    protected $city;
    protected $house;

    public function __construct(City $city,
                                House $house)
    {
        $this->middleware('auth');
        $this->city = $city;
        $this->house = $house;
    }

    public function index()
    {
        $house = House::paginate();
    }

    public function create()
    {
        $cities = $this->city->all();
        return view('house.formAdd', compact('cities'));
    }

    public function add(Request $request)
    {
        $house = new House();
        $house->name = $request->name;
        if ($request->hasFile('image')) {
            $image = $request->file("image");
            $path = $image->store("img", "public");
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
        return redirect()->route('home');
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

    public function getAllHouse()
    {
        $houses = $this->house->all();
        return view('house.list', compact('houses'));
    }

}
