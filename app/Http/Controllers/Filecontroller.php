<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\File;

class Filecontroller extends Controller
{
    public function index(){
        $file = File::all();
        $data = [
            'file' => $file
        ];
        return view('admin.file', $data);
    }

    public function store(Request $request){
        $image = $request->file('file');
        $image->storeAs('public/file', $image->hashName());
        $url = url(Storage::url('public/file/'.$image->hashName()));
        File::create([
            'url' => $url,
            'file' => $image->hashName()
        ]);

        return redirect('file');
    }

    public function destroy($id){
        File::where('id',$id)->delete();
        return redirect('file');
    }
}
