<?php

use App\City;
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $city= new City();
        $city->name='Hà Nội';
        $city->save();

        $city= new City();
        $city->name='Đà Nẵng';
        $city->save();

        $city= new City();
        $city->name='Hồ Chí Minh';
        $city->save();

        $city= new City();
        $city->name='Nha Trang';
        $city->save();

        $city= new City();
        $city->name='Huế';
        $city->save();
    }
}
