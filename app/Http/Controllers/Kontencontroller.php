<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Konten, Kategori};

class Kontencontroller extends Controller
{
    public function index(){
        $konten = Konten::all();
        $kategori = Kategori::all();
        $data = [
            'konten' => $konten,
            'kat' => $kategori
        ];
        return view('admin.konten', $data);
    }

    public function store(Request $request){
        $image = $request->file('file');
        $image->storeAs('public/konten', $image->hashName());

        Konten::create([
            'name' => $request->name,
            'text' => $request->text,
            'category_id' => $request->category_id,
            'file' => $image->hashName()
        ]);

        return redirect('konten');
    }

    public function update(Request $request){
        if($request->hasFile('file')){
            $image = $request->file('file');
            $image->storeAs('public/konten', $image->hashName());
            Konten::where('contents_id', $request->id)->update([
                'name' => $request->name,
                'text' => $request->text,
                'category_id' => $request->category_id,
                'file' => $image->hashName()
            ]);
            return redirect('konten');
        }
        else{
            Konten::where('contents_id', $request->id)->update([
                'name' => $request->name,
                'text' => $request->text,
                'category_id' => $request->category_id
            ]);
            return redirect('konten');
        }
    }

    public function destroy($id){
        Konten::where('contents_id',$id)->delete();
        return redirect('konten');
    }
}
