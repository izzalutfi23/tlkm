<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class Admincontroller extends Controller
{
    public function index(){
        $news = News::all();
        $data = [
            'news' => $news
        ];
        return view('admin.news', $data);
    }

    public function store(Request $request){
        $image = $request->file('file');
        $image->storeAs('public/news', $image->hashName());

        News::create([
            'name' => $request->name,
            'text' => $request->text,
            'file' => $image->hashName()
        ]);

        return redirect('adm');
    }

    public function update(Request $request){
        if($request->hasFile('file')){
            $image = $request->file('file');
            $image->storeAs('public/news', $image->hashName());
            News::where('news_id', $request->id)->update([
                'name' => $request->name,
                'text' => $request->text,
                'file' => $image->hashName()
            ]);
            return redirect('adm');
        }
        else{
            News::where('news_id', $request->id)->update([
                'name' => $request->name,
                'text' => $request->text
            ]);
            return redirect('adm');
        }
    }

    public function destroy($id){
        News::where('news_id',$id)->delete();
        return redirect('adm');
    }
}
