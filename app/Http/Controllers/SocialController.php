<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    /**
     * Redirect the user to the Facebook authentication page.
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->stateless()->user();
        $authUser = $this->findOrCreateUser($user);
        Auth::login($authUser,true);
        return redirect()->route('home');
    }

    public function findOrCreateUser($facebookUser)
    {
        $authUser = User::where('provider_id', $facebookUser->id)->first();

        if($authUser){
            return $authUser;
        }
        return User::create([
            'name' => $facebookUser->name,
            'password' => $facebookUser->token,
            'email' => $facebookUser->email,
            'provider_id' => $facebookUser->id,
            'provider' => $facebookUser->id,
            'roleID' => 2,
        ]);
    }

}
