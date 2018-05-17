<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;

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
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function create() 
    {
        // dd('create');
        // \Log::info('create route'); 
        return view('login.create');
    }

    public function store()
    {
        \Log::info('storeroute'); 
       if(!auth()->attempt(request(['email','password'])))
       {
           return back()->withErrors([
               'message'=>'Bad credentials.Please try again'
           ]);

       }
 
      $user = User::where('email', request('email')); 
      auth()->login($user);
       return redirect('/');
    }


    public function destroy()
    {  
        dd('destroy');
        \Log::info('destroy');   
       auth()->logout();
       return redirect('/login');
    }
}

