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

        $house = new House();
        $house->name = 'Vietcombank Tower';
        $house->image = 'img/rooms/vietcombank.jpg';
        $house->kindHouse = 'Home Stay';
        $house->kindRoom = 'Phòng đôi';
        $house->address = 'Hà Nội';
        $house->numBedroom = '2';
        $house->numBathroom = '2';
        $house->description = 'Tọa lạc tại ngay mặt đường Pham Hùng, cửa ngõ phía Tây Hà Nội. Keangnam có tổng mức đầu tư cho toàn bộ công trình là 1,05 tỷ USD, bao gồm 2 tòa chung cư cao cấp 48 tầng và tòa nhà tổ hợp văn phòng, khách sạn, trung tâm giải trí 72 tầng.';
        $house->price = 230.000;
        $house->city_id = 2;
        $house->save();

        $house = new House();
        $house->name = 'FLC Twin Tower A';
        $house->image = 'img/rooms/FLC.jpg';
        $house->kindHouse = 'Home Stay';
        $house->kindRoom = 'Phòng đôi';
        $house->address = 'Tọa lạc tại địa chỉ 265 Cầu Giấy';
        $house->numBedroom = '2';
        $house->numBathroom = '2';
        $house->description = 'Trên nền diện tích hơn 1 ha sẽ được xây dựng 1 tòa tháp đôi, trong đó tháp căn hộ có chiều cao 50 tầng và tháp văn phòng là 38 tầng, với 3 tầng hầm để xe. 5 tầng đế dành cho chức năng thương mại với diện tích sàn khu thương mại là 25.000 m2; khu căn hộ có tổng diện tích 66.484 m2 và khu văn phòng có tổng diện tích sàn 35.960 m2. Với mật độ xây dựng khối chân đế là 48,6%, dự án sẽ tạo ra một không gian sinh hoạt chung nhiều sắc xanh, thoáng đạt cho toàn bộ cư dân.';
        $house->price = 230.000;
        $house->city_id = 2;
        $house->save();

        $house = new House();
        $house->name = 'Lotte Center';
        $house->image = 'img/rooms/lotte.jpg';
        $house->kindHouse = 'Home Stay';
        $house->kindRoom = 'Phòng đôi';
        $house->address = 'Hà Nội';
        $house->numBedroom = '2';
        $house->numBathroom = '2';
        $house->description = 'Từ tầng 1 đến tầng 6 là trung tâm thương mại với các mặt hàng thời trang cao cấp. Trên đó là khu văn phòng cho thuê hạng A và căn hộ sang trọng, khách sạn 5 sao. Tại tầng nóc của tòa nhà Lotte được bố trí quán bar và Đài quan sát Sky Walk giúp bạn có thể quan sát gần như toàn bộ thành phố Hà Nội.';
        $house->price = 230.000;
        $house->city_id = 2;
        $house->save();
    }

}
