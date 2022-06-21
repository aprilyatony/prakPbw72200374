<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Dosen;

class DosenController extends Controller
{
    public function dosen()
    {
        $dosen = Dosen::paginate(10);
        return view ('dosen', ['dosen' => $dosen]);
    }
    
    public function pencarian (Request $request)
    {
        $search = $request->search;
        $dosen = Dosen::where('nidn', 'like', '%'.$search.'%')->orWhere('nama', 'like', '%'.$search.'%')->paginate();
        return view ('dosen', ['dosen' => $dosen]);
    }

    public function formDosen ()
    {
        return view('formDosen');
    }
    public function simpandosen (Request $request){
        $pakar = implode(",", $request->get('pakar'));
        Dosen::create([
            'nidn' => $request->nidn,
            'nama' => $request->nama,
            'status' => $request->status,
            'jafung' => $request->jafung,
            'pakar' => $pakar
        ]);
        return redirect("/dosen")->with('alert_tambah', 'Data Berhasil Di Tambahkan');
    }

    public function editdosen($id)
    {
        $dosen = Dosen::find($id);
        return view ('editdosen', ['dosen' => $dosen]);
        
    }


    public function simpanEditdosen($id, Request $request)
    {
        $pakar= implode(',', $request->pakar);
        $dosen = Dosen::find($id);
        $dosen->nidn= $request->nim;
        $dosen->nama = $request->nama;
        $dosen->status = $request->status;
        $dosen->jafung = $request->jafung;
        $dosen->pakar = $pakar;
        $dosen->save();
        return redirect('/dosen')->with('alert_update','Data Berhasil Di Ubah');
    }

   public function deletedosen($id)
    {
        $dosen = Dosen::find($id);
        $dosen->delete();
        return redirect('/dosen')->with('alert_hapus','Data Dosen Berhasil Di Hapus');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}