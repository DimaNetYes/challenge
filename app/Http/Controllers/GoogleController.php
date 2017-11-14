<?php
/**
 * Created by PhpStorm.
 * User: SAnchik
 * Date: 10.11.2017
 * Time: 14:34
 */


namespace App\Http\Controllers;

use App\User;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Socialite;

class GoogleController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $SocialUser = Socialite::driver('google')->stateless()->user();
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