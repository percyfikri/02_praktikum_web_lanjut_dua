<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        echo "Selamat Datang";
    }

    public function about(){
        echo "NIM   : 2141720190<br>";
        echo "Nama  : Muhammad Alvi Fikri<br>";
        echo "Kelas : 2H";
    }

    public function articles($id){
        echo "Halaman Artikel dengan ID $id";
    }
}
