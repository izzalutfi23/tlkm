<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Subkategori, Kategori};

class Subkategoricontroller extends Controller
{
    public function index(){
        $kategori = Kategori::all();
        $subkategori = Subkategori::all();
        $data = [
            'kat' => $kategori,
            'subkat' => $subkategori
        ];
        return view('admin.subkategori', $data);
    }

    public function store(Request $request){

        Subkategori::create([
            'categories_id' => $request->categories_id,
            'name' => $request->name
        ]);

        return redirect('subkategori');
    }

    public function update(Request $request){
        Subkategori::where('id', $request->id)->update([
            'categories_id' => $request->categories_id,
            'name' => $request->name
        ]);
        return redirect('subkategori');
    }

    public function destroy($id){
        Subkategori::where('id',$id)->delete();
        return redirect('subkategori');
    }
}
