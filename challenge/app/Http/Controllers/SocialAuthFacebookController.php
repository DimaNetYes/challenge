<?php

namespace App\Http\Controllers;

use App\User;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Socialite;


class SocialAuthFacebookController extends Controller
{
    /**
     * Create a redirect method to facebook api.
     *
     * @return void
     */
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Return a callback method from facebook api.
     *
     * @return callback URL from facebook
     */
    public function callback()
    {
        $SocialUser = Socialite::driver('facebook')->stateless()->user();
//        dd($SocialUser);

        $data = [
            'social_id' => $SocialUser->getID(),
            'name' => $SocialUser->name,
            'email' => $SocialUser->getEmail()
        ];
//        dd($data);
        $user = User::where('social_id', $data['social_id'])->first();
        if(is_null($user)){
            $user = new User($data);
            $user -> save();
        }
//        return $this->redirect();

        Auth::login($user,true);


    }
}
