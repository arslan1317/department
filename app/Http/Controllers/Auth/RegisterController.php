<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\UserRequest;
use App\Admin\BasicSetting;
use App\Department;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        $user =  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'isAdmin' => 0,
        ]);

        UserRequest::create([
            'user_id' => $user->id,
            'sub_dep_id' => $data['subdepartment'],
            'status' => 0,
        ]);

        return $user;

    }

    public function showRegistrationForm()
    {
        $social_icons = BasicSetting::where('section_type', 2)->get();
        $approved_user_request = UserRequest::where('status', '!=', 0)->get();
        $department = Department::orderby('id', 'desc')->get();
        $all_department = Department::all();
        return view('auth.register', compact('department', 'approved_user_request', 'social_icons','all_department'));
    }

    protected function registered(Request $request, $user)
    {
        Auth::logout();
        return redirect()->back()->with('status', 'Your Request has not been approved from Admin');
    }

}
