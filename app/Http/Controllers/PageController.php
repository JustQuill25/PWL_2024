<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
        //
    }

    public function about()
    {
        return 'Nama : Ahmad Franklyn Bima Aquilla <br> NIM : 2341760027';
        //
    }

    public function articles($id)
    {
        return 'Halaman Artikel dengan ' . $id;
        //
    }

}