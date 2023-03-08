<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return 'NIM : 2141720009 <br> Nama : Sabna Devi Kumalasari';
    }

    public function articles($id){
        return 'Halaman Artikel dengan ID' .$id; 
    }
}
