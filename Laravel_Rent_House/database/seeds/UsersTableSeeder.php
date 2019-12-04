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
        $user->email = 'Bao987@gamil.com';
        $user->password = 'bao12345';
        $user->dob = '1990/09/12';
        $user->idCard = 123456789;
        $user->gender = 'male';
        $user->address = '12 Lạc Trung, Hai Bà Trưng, Hà Nội';
        $user->image = 'asset/public/images/osz__size__.jpg';
        $user->role = 2;
        $user->save();


        $user = new User();
        $user->name = 'Trần Thanh Hà';
        $user->email = 'Hà890@gamil.com';
        $user->password = 'Ha112345';
        $user->dob = '1990/09/23';
        $user->idCard = 123456798;
        $user->gender = 'female';
        $user->address = '34 Lạc Trung, Hai Bà Trưng, Hà Nội';
        $user->image = 'asset/public/images/osz__size__.jpg';
        $user->role = 2;
        $user->save();

        $user = new User();
        $user->name = 'Nguyễn Nam';
        $user->email = 'Nam1987@gamil.com';
        $user->password = 'Nambnb12345';
        $user->dob = '1990/10/12';
        $user->idCard = 123453389;
        $user->gender = 'male';
        $user->address = '44 Lạc Trung, Hai Bà Trưng, Hà Nội';
        $user->image = 'asset/public/images/osz__size__.jpg';
        $user->role = 1;
        $user->save();

        $user = new User();
        $user->name = 'Hoàng Thùy Linh';
        $user->email = 'Linh987@gamil.com';
        $user->password = 'avvhg12345';
        $user->dob = '1990/12/12';
        $user->idCard = 123433789;
        $user->gender = 'male';
        $user->address = '25 Lạc Trung, Hai Bà Trưng, Hà Nội';
        $user->image = 'asset/public/images/osz__size__.jpg';
        $user->role = 2;
        $user->save();
    }
}
