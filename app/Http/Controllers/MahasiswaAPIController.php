<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaAPIController extends Controller
{
  
        public function all()
        {
            $mahasiswa = Mahasiswa::all();
            return response()->json([
                'success' => true,
                'message' => 'Data Berhasil DiTampilkan',
                'data'    => $mahasiswa
            ], 200);
        }

        public function create(Request $request)
        {
            $mahasiswa = Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'bidang_minat' => $request ->bidang_minat
            ]);

            if ($mahasiswa)
            {
                return response()->json([
                    'success' => true,
                    'message' => 'Data Berhasil DiTambahkan' 
                ], 200);
            }
            else
            {
                return response()->json([
                    'success' => false,
                    'message' => 'Data ini Gagal DiTambahkan' 
                ], 401);
            }
        }

        public function update(Request $request)
        {
            $mahasiswa = Mahasiswa::whereId($request->id)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'bidang_minat' => $request ->bidang_minat
            ]);

            if ($mahasiswa)
            {
                return response()->json([
                    'success' => true,
                    'message' => 'Berhasil di ubah' 
                ], 200);
            }
            else
            {
                return response()->json([
                    'success' => false,
                    'message' => 'Gagal di ubah' 
                ], 400);
            }
        }

        public function update2($id, Request $request)
        {
            $mahasiswa = Mahasiswa::whereId($id)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'bidang_minat' => $request ->bidang_minat
            ]);

            if ($mahasiswa)
            {
                return response()->json([
                    'success' => true,
                    'message' => 'Data Berhasil Telah di ubah' 
                ], 200);
            }
            else
            {
                return response()->json([
                    'success' => false,
                    'message' => 'Data Gagal di ubah' 
                ], 400);
            }
        }

        public function delete($id)
        {
            $mahasiswa = Mahasiswa::find($id);
            $mahasiswa->delete();

            if($mahasiswa)
            {
                return response()->json([
                    'success' => true,
                    'message' => 'Data Berhasil Hapus' 
                ], 200);
            }
            else
            {
                return response()->json([
                    'success' => false,
                    'message' => 'Data Gagal di Hapus' 
                ], 400);
            }
            
        }
}
