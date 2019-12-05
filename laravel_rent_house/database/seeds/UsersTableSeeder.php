<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Hoang Thanh Bao';
        $user->email = 'admin@gmail.com';
        $user->phone = '0988746356';
        $user->password = \Illuminate\Support\Facades\Hash::make('12345678');
        $user->dob = '1990/09/12';
        $user->idCard = 123456789;
        $user->gender = 'male';
        $user->address = '12 Lạc Trung, Hai Bà Trưng, Hà Nội';
        $user->save();


        $user = new User();
        $user->name = 'Trần Thanh Hà';
        $user->email = 'guest1@gmail.com';
        $user->phone = '0988746356';
        $user->password = \Illuminate\Support\Facades\Hash::make('12345678');
        $user->dob = '1990/09/23';
        $user->idCard = 123456798;
        $user->gender = 'female';
        $user->address = '34 Lạc Trung, Hai Bà Trưng, Hà Nội';
        $user->save();

        $user = new User();
        $user->name = 'Nguyễn Nam';
        $user->email = 'guest2@gmail.com';
        $user->phone = '0988746356';
        $user->password = \Illuminate\Support\Facades\Hash::make('12345678');
        $user->dob = '1990/10/12';
        $user->idCard = 123453389;
        $user->gender = 'male';
        $user->address = '44 Lạc Trung, Hai Bà Trưng, Hà Nội';
        $user->save();

        $user = new User();
        $user->name = 'Hoàng Thùy Linh';
        $user->email = 'guest3@gmail.com';
        $user->phone = '0988746356';
        $user->password = \Illuminate\Support\Facades\Hash::make('12345678');
        $user->dob = '1990/12/12';
        $user->idCard = 123433789;
        $user->gender = 'male';
        $user->address = '25 Lạc Trung, Hai Bà Trưng, Hà Nội';
        $user->save();
    }
}
