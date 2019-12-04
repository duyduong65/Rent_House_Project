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
        $house->name = 'cho thuê nhà nguyên căn';
        $house->image = 'http://baohagiang.vn/dataimages/201808/original/images1414227_HA_GIANG.jpg';
        $house->kindHouse = 'Home Stay';
        $house->kindRoom = 'Phòng đôi';
        $house->address = 'Mỹ Khê, Đà Nẵng';
        $house->numBedroom = '2';
        $house->numBathroom = '2';
        $house->description = 'Gần biển. Tọa lạc ở thành phố Đà Nẵng, cách Bãi biển Mỹ Khê 200 m,';
        $house->price = 230.000;
        $house->city_id = 2;
        $house->save();

        $house = new House();
        $house->name = 'The Vietnam Hotel';
        $house->image = 'http://baohagiang.vn/dataimages/201808/original/images1414227_HA_GIANG.jpg';
        $house->kindHouse = 'Home Stay';
        $house->kindRoom = 'Phòng đôi';
        $house->address = 'Sông Hàn, Đà Nẵng';
        $house->numBedroom = '2';
        $house->numBathroom = '2';
        $house->description = 'Cách trung tâm 600m. Tọa lạc tại vị trí thuận tiện ở trung tâm thành phố Đà Nẵng, The Vietnam Hostel cung cấp phòng nghỉ gắn máy điều hòa, sảnh khách chung, WiFi miễn phí và vườn.';
        $house->price = 230.000;
        $house->city_id = 2;
        $house->save();

        $house = new House();
        $house->name = 'Little Charm Ha Noi Hotel';
        $house->image = 'http://baohagiang.vn/dataimages/201808/original/images1414227_HA_GIANG.jpg';
        $house->kindHouse = 'Home Stay';
        $house->kindRoom = 'Phòng đôi';
        $house->address = 'Hoàn Kiếm, Hà Nội';
        $house->numBedroom = '1';
        $house->numBathroom = '1';
        $house->description ='Nằm trong bán kính 2 phút đi bộ từ Ô Quan Chưởng ở quận Hoàn Kiếm, Little Charm Hanoi Hostel cung cấp chỗ nghỉ trang nhã và nhà hàng kiểu Ý ngay trong khuôn viên.';
        $house->price = 230.000;
        $house->city_id = 1;
        $house->save();

        $house = new House();
        $house->name = 'Aeron Hotel';
        $house->image = 'http://baohagiang.vn/dataimages/201808/original/images1414227_HA_GIANG.jpg';
        $house->kindHouse = 'Home Stay';
        $house->kindRoom = 'Phòng đôi';
        $house->address = 'Nha Trang Beach, Nha Trang';
        $house->numBedroom = '2';
        $house->numBathroom = '2';
        $house->description = 'Tọa lạc ở thành phố Nha Trang, Aaron Hotel có nhà hàng, hồ bơi ngoài trời, trung tâm thể dục và sảnh khách chung.';
        $house->price = 530.000;
        $house->city_id = 4;
        $house->save();
    }
}
