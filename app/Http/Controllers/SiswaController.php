<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Siswa;
class SiswaController extends Controller
{
    //siswa

    public function index()
    {
       $halaman = 'siswa';
       $siswa_list = Siswa::all()->sortBy('tanggal_lahir');
       $jumlah_siswa = $siswa_list->count();
       return view('siswa.index', compact('halaman','siswa_list','jumlah_siswa'));
    }
    public function create()
    {
        return view('siswa.create');
    }
    public function store(Request $request)
    {
        $siswa = $request->all();
        return $siswa;
    }
    public function show($id)
    {
        $halaman = 'siswa';
        $siswa = Siswa::findOrFail($id);
        return view('siswa.show', compact('halaman','siswa'));
    }
}
