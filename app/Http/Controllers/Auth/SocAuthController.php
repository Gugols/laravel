<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

//other

use Auth;
use Socialite;
use App\User;
use File;

class SocAuthController extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from provider.  Check if the user already exists in our
     * database by looking up their provider_id in the database.
     * If the user exists, log them in. Otherwise, create a new user then log them in. After that 
     * redirect them to the authenticated users homepage.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();

        $authUser = $this->findOrCreateUser($user, $provider);

        // lets check if user has already created an user profile
            //if it has one, redirect to Home. If not, redirect tu profile page to create it.
        //dd($authUser);

        Auth::login($authUser, true);
        //return redirect($this->redirectTo);
        return redirect()->route('home');
    }

    /**
     * If a user has registered before using social auth, return the user
     * else, create a new user object.
     * @param  $user Socialite user object
     * @param $provider Social auth provider
     * @return  User
     */
    public function findOrCreateUser($user, $provider)
    {
        $authUser = User::where('provider_id', $user->id)->first();
        if ($authUser) {
            return $authUser;
        }

        $file = $user->getAvatar();
        if($file = $user->getAvatar()) {
            if ($provider == 'google') {
                $file = str_replace('?sz=50', '', $file);
            } elseif ($provider == 'twitter') {
                $file = str_replace('_normal', '', $file);
            } elseif ($provider == 'facebook') {
                $file = str_replace('type=normal', 'type=large', $file);
            }
        }
        $avatar_file = file_get_contents($file);
        Storage::disk('uploads')->put('/avatars/'.$user->getId() . ".jpg", $avatar_file);
        $user = User::create([
            'name'     => $user->name,
            'email'    => $user->email,
            'provider' => $provider,
            'provider_id' => $user->id,
            'avatar' => $user->getId() . ".jpg",
        ]);
        $user->assignRole('regular user');
        return $user;
    }

    
}
