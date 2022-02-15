<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
            'first_name' => ['required', 'alpha_num', 'max:25'],
            'middle_name' => ['nullable','alpha', 'max:25'],
            'last_name' => ['required', 'alpha', 'max:25'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'alpha_num', 'min:8'],
            'display_picture_link' => ['required', 'mimes:jpeg,bmp,png'],
            'role_id' => ['required'],
            'gender_id' => ['required'],

        ]);


    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        // dd($data);
        return User::create([
            'first_name' => $data['first_name'],
            'middle_name' => $data['middle_name'],
            'last_name' => $data['last_name'],
            'password' => Hash::make($data['password']),
            'email' => $data['email'],
            'display_picture_link' => $data['display_picture_link'],
            'delete_flag' => 0,
            'modified_at_date' => date('Y-m-d H:i:s'),
            'modified_by' => 1,
            'role_id' => $data['role_id'],
            'gender_id' => $data['gender_id']
        ]);


    }
}
