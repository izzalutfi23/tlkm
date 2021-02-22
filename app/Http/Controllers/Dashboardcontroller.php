<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Kategori, Konten};

class Dashboardcontroller extends Controller
{
    public function index(){
        $kategori = Kategori::all();
        $konten = Konten::orderBy('name', 'ASC')->get();
        $data = [
            'kategori' => $kategori,
            'konten' => $konten
        ];
        return view('user.dashboard', $data);
    }

    public function getbyid($id){
        $konten = Konten::where('contents_id', $id)->first();
        $data = [
            'konten' => $konten
        ];
        return view('user.dashboarddetail', $data);
    }
}
