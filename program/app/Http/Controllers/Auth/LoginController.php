<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use App\Models\User;

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
    /* protected function authenticated(Request $request, User $user)
    {
        if ($request->Admin()) {
            return redirect()->route('listAdmin');
        } elseif ($request->Manager()) {
            return redirect()->route('listManager');
        } elseif($request->User()) {
             return redirect()->route('listCustomer');
        }else{
            return redirect()->route('home');
        }
       
    }

 */


    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
