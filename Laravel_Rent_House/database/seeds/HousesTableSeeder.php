<?php

use App\House;
use Illuminate\Database\Seeder;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $house= new House();
        $house->name= 'cho thuê nhà nguyên căn';
        $house->kindHouse = 'Home Stay';
        $house->kindRoom= 'Phòng đôi';
        $house->address= 'Hoàng Thái An';
        $house->numBedroom= 'Hoàng Thái An';
        $house->numBathroom= 'Hoàng Thái An';
        $house->description= 'Hoàng Thái An';
        $house->price= 'Hoàng Thái An';
        $house->city_id= 'Hoàng Thái An';
        $house->save();
    }
}
