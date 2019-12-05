<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function __construct()
    {
    }

    public function formAddHouse(){
        return view('house.formAdd');
    }
}
