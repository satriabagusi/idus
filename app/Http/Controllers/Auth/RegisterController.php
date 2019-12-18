<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest');
        $this->path = storage_path('app/public/assets/img/user');
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
            'nama' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
            'no_hp' => 'required|string|max:14',
            'alamat' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'avatar' => 'mimes:jpeg,jpg,png|max:300000',
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

        if(request()->hasFile('avatar')){
            if (Input::file('avatar')->isValid()) {
                $file = Input::file('avatar');
                $destination = 'assets/img/user/';
                $ext= $file->getClientOriginalExtension();
                $mainFilename = time();
                $file->move($destination, $mainFilename.".".$ext);
                $avatar = $mainFilename.".".$ext;
                }
            }else{
                $avatar = "avatar.png";
            }

        return User::create([
            'nama' => $data['nama'],
            'role_id' => 2,
            'email' => $data['email'],
            'no_hp' => $data['no_hp'],
            'alamat' => $data['alamat'],
            'alamat' => $data['alamat'],
            'avatar' => $avatar,
            'password' => Hash::make($data['password']),
        ]);

        return redirect('/#loginModal');
    }

}
