<?php

namespace App\Http\Controllers;

use App\SocialAccount;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    public function redirect($social)
    {
        return Socialite::driver($social)->redirect();
    }
    public function callback($social)
    {
        $fbUser = Socialite::driver($social)->stateless()->user();
        $accounts = SocialAccount::where('provider_user_id', 'like', $fbUser->id)->first();
        if ($accounts) {
            $user = $accounts->user()->first();
        } else {
            $email = $fbUser->user['email'];
            $account = new SocialAccount();
            $account->provider_user_id = $fbUser->id;
            $account->provider = $social;
            $user = User::where('email', 'like', $email)->first();
            if (!$user) {
                $user = new User();
                $user->name = $fbUser->user['name'];
                $user->password = Hash::make($fbUser->user['name']);
                $user->email = $email;
                $user->phone = '0397487203';
                $user->idCard = '125654497';
                $user->dob = '1996/12/26';
                $user->gender = 'male';
                $user->address = 'Phố Wall';
                $user->save();
            }
            $account->user()->associate($user);
            $account->save();
        }
        Auth::login($user);
        return redirect()->to('/');
    }
}
