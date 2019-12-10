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
        $house = new House();
        $house->name = 'Keangnam Lanmark 72 ';
        $house->image = 'img/rooms/72.jpg';
        $house->kindHouse = 'Home Stay';
        $house->kindRoom = 'Phòng đôi';
        $house->address = 'Hà Nội';
        $house->numBedroom = '2';
        $house->numBathroom = '2';
        $house->description = 'Tọa lạc tại ngay mặt đường Pham Hùng, cửa ngõ phía Tây Hà Nội. Keangnam có tổng mức đầu tư cho toàn bộ công trình là 1,05 tỷ USD, bao gồm 2 tòa chung cư cao cấp 48 tầng và tòa nhà tổ hợp văn phòng, khách sạn, trung tâm giải trí 72 tầng.';
        $house->price = 230.000;
        $house->city_id = 2;
        $house->save();
        }
}
