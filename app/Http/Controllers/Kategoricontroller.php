<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class Kategoricontroller extends Controller
{
    public function index(){
        $kategori = Kategori::all();
        $data = [
            'kat' => $kategori
        ];
        return view('admin.kategori', $data);
    }

    public function store(Request $request){

        Kategori::create([
            'name' => $request->name
        ]);

        return redirect('kategori');
    }

    public function update(Request $request){
        Kategori::where('category_id', $request->id)->update([
            'name' => $request->name
        ]);
        return redirect('kategori');
    }

    public function destroy($id){
        Kategori::where('category_id',$id)->delete();
        return redirect('kategori');
    }
}
