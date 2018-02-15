<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SiswaController extends Controller
{
    //siswa

    public function index()
    {
       $halaman = 'siswa';
       $siswa_list = Siswa::all();
       return view('siswa.index', compact('halaman','siswa_list'));
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
}
