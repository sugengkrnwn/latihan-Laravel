<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RahasiaController extends Controller
{
    //rahasia
    public function halamanRahasia()
    {
        return 'Anda Sedang melihatku<strong>Halaman Rahasia</strong>';    
    }

    public function showMeSecret()
    {
        $url = route('secret');
        $link = '<a href="' . $url . '">Kehalaman Rahasia </a>';
        return $link;
    }
}
