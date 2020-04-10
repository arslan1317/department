<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Admin\BasicSetting;
use App\UserRequest;
use App\Department;
use Auth;

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

    public function logout() {
        if(auth()->user()->isAdmin == 0){
            Auth::logout();
            return redirect('/login');
        }else if(auth()->user()->isAdmin == 1){
            Auth::logout();
            return redirect('/admin/login');
        }
    }

    public function showAdminLoginForm()
    {
        return view('auth.admin.login');
    }

    protected function authenticated(Request $request, $user)
    {
        $access = UserRequest::where('user_id', $user->id)->first();
        if(isset($access['isAdmin']) != 0){
            if(isset($access['status']) == 0){
                Auth::logout();
                return redirect()->back()->with('status', 'Your Request has not been approved from Admin');
            }
        }
    }

    public function showLoginForm()
    {
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $all_department = Department::all();
        return view('auth.login', compact('social_icons', 'all_department'));
    }

}
