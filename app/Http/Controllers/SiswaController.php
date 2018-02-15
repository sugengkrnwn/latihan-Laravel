<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SiswaController extends Controller
{
    //siswa
    protected $request; 
    
    public function __construct(Request $req)
    {
        $this->request= $req;
    }

    public function index()
    {
        $halaman = 'siswa';
        $siswa = ['Ramus darmawan','ahmad taylor','Sugeng kurniawan','haris'];
        return view('siswa.index', compact('halaman','siswa'));
    }
    public function create()
    {
        return view('siswa.create');
    }
    public function store(Request $request)
    {
        $data = $this->request;
        $siswa = $data->all();
    }
}
