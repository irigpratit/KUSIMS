<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
<<<<<<< HEAD
=======
use Socialite;
use Auth;
use App\User;
>>>>>>> Code_V2

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
<<<<<<< HEAD
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';
=======
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/admin/home';
>>>>>>> Code_V2

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
<<<<<<< HEAD
        $this->middleware('guest')->except('logout');
=======
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleProviderCallback()
    {
        // $user = Socialite::driver('google')->user();
        // dd($user);

        try {
            $user = Socialite::driver('google')->user();
         
        } catch (\Exception $e) {
            return redirect('/login');
        }
        // only allow people with @company.com to login
        if(explode("@", $user->email)[1] !== 'gmail.com'){
            return redirect('/login')->withErrors(['Only account with Gmail Can Login! Please contact the Administration']);
        }
        // check if they're an existing user
        $existingUser = User::where('email', $user->email)->first();
        if($existingUser){
            // log them in
            auth()->login($existingUser, true);
        } else {
            // return back()->withErrors('You are not registered to System! Please contact the Administration');
            return redirect('/login')->withErrors(['You are not registered to System! Please contact the Administration']);
            // // create a new user
            // $newUser                  = new User;
            // $newUser->name            = $user->name;
            // $newUser->email           = $user->email;
            // $newUser->google_id       = $user->id;
            // $newUser->avatar          = $user->avatar;
            // $newUser->avatar_original = $user->avatar_original;
            // $newUser->save();
            // auth()->login($newUser, true);
        }
        return redirect()->to('/');
>>>>>>> Code_V2
    }
}
