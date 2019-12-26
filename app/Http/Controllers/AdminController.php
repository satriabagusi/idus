<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;


class AdminController extends Controller
{

    public function __construct()
    {
        // $this->middleware('guest');
        $this->path = storage_path('app/public/assets/img/user');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check() && Auth::user()->role_id == 1 ) {
            return view('admin.index');
        }else {
            return redirect('/');
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add-admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
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


    public function store(Request $request)
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

        User::create([
            'nama' => $request['nama'],
            'role_id' => 1,
            'email' => $request['email'],
            'no_hp' => $request['no_hp'],
            'alamat' => $request['alamat'],
            'alamat' => $request['alamat'],
            'avatar' => $avatar,
            'password' => Hash::make($request['password']),
        ]);

        return redirect('/admin/add-admin/')->with('message', 'Berhasil menambahkan admin !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.profile');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function allTransaction(){
        $transactions = Transaction::all();
        return view('admin.transaksi', compact('transactions'));
    }
}
