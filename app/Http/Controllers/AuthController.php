<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function user()
    {
        $user = User::paginate(5);
        return view('user', ['user' => $user]);
    }

    public function formuliruser()
    {
        return view ('formuliruser');
    }

    public function simpanuser(Request $request)
    {
        $user = User::create([
            'name' => $request -> name,
            'email' => $request -> email,
            'password' => bcrypt($request -> password)
        ]);
        return redirect('/user');
    }

    public function login()
    {
        return view('formulirlogin');
    }

    public function ceklogin(Request $request)
    {
        if(!Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect('/login');
        }
        else
        {
            return redirect('/mahasiswa');
        }
    }

    public function edituser($id)
    {
        $user = User::find($id);
        return view ('edituser', ['user' => $user]);
    }

    public function simpanedituser($id, Request $request)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return view('/user')->with('alert_update','Data Berhasil Di Ubah');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('alert_logout','Anda Berhasil Logout');
    }

    public function deleteuser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/user')->with('alert_hapus','Data Berhasil Di Hapus');
    }
}
