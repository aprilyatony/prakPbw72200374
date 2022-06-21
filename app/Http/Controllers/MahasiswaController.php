<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function mahasiswa()
    {
        $mahasiswa = Mahasiswa::paginate(10);
        return view ('mahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function pencarian (Request $request)
    {
        $search = $request->search;
        $mahasiswa = Mahasiswa::where('nim', 'like', '%'.$search.'%')->orWhere('nama', 'like', '%'.$search.'%')->paginate();
        return view ('mahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function form()
    {
        return view ('form');
    }

    public function simpanmahasiswa(Request $request){
        $bidang = implode(",", $request->get('bidang'));
        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'bidang_minat' => $bidang
        ]);
        return redirect ("/mahasiswa")->with('alert_tambah', 'Data Berhasil Di Tambahkan');
    }

    public function editmahasiswa($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('editmahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function simpanEditmahasiswa($id, Request $request)
    {
        $bidang = implode(',',$request->bidang);
        $mahasiswa = mahasiswa::find($id);
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->gender = $request->gender;
        $mahasiswa->jurusan = $request->jurusan;
        $mahasiswa->bidang_minat = $bidang;
        $mahasiswa->save();
        return redirect('/mahasiswa')->with('alert_update','Data Berhasil Di Ubah');
    }

    public function deletemahasiswa($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/mahasiswa')->with('alert_hapus','Data Berhasil Di Hapus');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

}