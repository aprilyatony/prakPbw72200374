<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usser;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function usser()
    {
        $usser = usser::paginate(5);
        return view('userBaru', ['userBaru' => $usser]);
    }

    public function formuliruser2()
    {
        return view ('formuliruser2');
    }

    public function simpanuser2(Request $request)
    {
        $usser = usser::create([
            'nik_user' => $request -> nik_user,
            'nama_user' => $request -> nama_user,
            'no_hp' => $request -> no_hp,
            'password' => bcrypt($request -> password)
        ]);
        return redirect('/usser')->with('alert_tambah', 'Data Berhasil Di Tambahkan');
    }

    public function deleteuser2($id)
    {
        $usser = usser::find($id);
        $usser->delete();
        return redirect('/usser')->with('alert_tambah', 'Data Berhasil Di Hapus');
    }

    public function edituser2($id)
    {
        $usser = usser::find($id);
        return view('edituser2', ['usser' => $usser]);
    }

    public function simpanedituser2($id, Request $request)
    {
        $validateData = $request->validate([
            'nik_user' =>'required|max:7',
            'password' =>'required|max:8',
        ]);
        $usser = usser::find($id);
        $usser->nik_user = $request->nik_user;
        $usser->nama_user = $request->nama_user;
        $usser->no_hp = $request->no_hp;
        $usser->password = md5 ($request->password);
        $usser->simpanedituser2();
        return redirect('/usser')->with('alert_update', 'Data Berhasil Di Ubah');
    }

    public function login2()
    {
        return view('formulirlogin2');
    }

    public function ceklogin2(Request $request)
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
}
