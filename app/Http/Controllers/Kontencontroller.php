<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Konten, Kategori, Subkategori};

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

    public function kat(){
        $kat = Kategori::all();
            echo "<option value='0'>--Pilih--</option>";
        foreach($kat as $data){
            echo "<option value='".$data->category_id."' id_kategori='".$data->category_id."'>".$data->name."</option>";
        }
    }

    public function subkat($id){
        $subkat = Subkategori::where('categories_id', $id)->get();

            echo "<option value='0'>Tidak Ada</option>";
        foreach($subkat as $data){
            echo "<option value='".$data->id."'>".$data->name."</option>";
        }
    }

    public function store(Request $request){

        if($request->hasFile('file')){
            $image = $request->file('file');
            $image->storeAs('public/konten', $image->hashName());
            Konten::create([
                'name' => $request->name,
                'text' => $request->text,
                'category_id' => $request->category_id,
                'subcategory_id' => $request->subcategory_id,
                'file' => $image->hashName()
            ]);
        }else{
            Konten::create([
                'name' => $request->name,
                'text' => $request->text,
                'category_id' => $request->category_id,
                'subcategory_id' => $request->subcategory_id,
                'file' => ''
            ]);
        }

        return redirect('konten');
    }

    public function update(Request $request){
        if($request->hasFile('file')){
            $image = $request->file('file');
            $image->storeAs('public/konten', $image->hashName());
            if($request->subcategory_id!=0){
                Konten::where('contents_id', $request->id)->update([
                    'name' => $request->name,
                    'text' => $request->text,
                    'category_id' => $request->category_id,
                    'subcategory_id' => $request->subcategory_id,
                    'file' => $image->hashName()
                ]);
            }
            else{
                Konten::where('contents_id', $request->id)->update([
                    'name' => $request->name,
                    'text' => $request->text,
                    'file' => $image->hashName()
                ]);
            }
            return redirect('konten');
        }
        else{
            if($request->subcategory_id!=0){
                Konten::where('contents_id', $request->id)->update([
                    'name' => $request->name,
                    'text' => $request->text,
                    'category_id' => $request->category_id,
                    'subcategory_id' => $request->subcategory_id
                ]);
            }
            else{
                Konten::where('contents_id', $request->id)->update([
                    'name' => $request->name,
                    'text' => $request->text
                ]);
            }
            return redirect('konten');
        }
    }

    public function destroy($id){
        Konten::where('contents_id',$id)->delete();
        return redirect('konten');
    }
}
