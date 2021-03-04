<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Kategori, Konten, Subkategori};

class Dashboardcontroller extends Controller
{
    public function index(){
        $kategori = Kategori::all();
        $subkategori = Subkategori::all();
        $konten = Konten::orderBy('name', 'ASC')->get();
        $data = [
            'kategori' => $kategori,
            'subkategori' => $subkategori,
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

    public function getbykat($id){
        $konten = Konten::where('category_id', $id)->get();
        $kat = Kategori::where('category_id', $id)->first();
        $data = [
            'konten' => $konten,
            'kategori' => $kat->name
        ];
        return view('user.dashbkat', $data);
    }
}
