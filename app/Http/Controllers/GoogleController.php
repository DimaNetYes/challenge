<?php
/**
 * Created by PhpStorm.
 * User: SAnchik
 * Date: 10.11.2017
 * Time: 14:34
 */


namespace App\Http\Controllers;

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
        $user = Socialite::driver('google')->stateless()->user();
        dd($user);
         $user->token;
        return $user->name;
    }
}