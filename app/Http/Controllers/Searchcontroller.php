<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Konten, News};

class Searchcontroller extends Controller
{
    public function search(Request $request){
        $result = [];
        $konten = Konten::where('name', 'LIKE', "%$request->search%")->get();
        $news = News::where('name', 'LIKE', "%$request->search%")->get();
        foreach($konten as $kon){
            $data = [
                'id' => $kon->contents_id,
                'keterangan' => 'Dashboard',
                'judul' => $kon->name,
                'text' => $kon->text,
                'url' => $kon->text
            ];
            array_push($result, $data);
        }
        foreach($news as $new){
            $data = [
                'id' => $new->news_id,
                'keterangan' => 'News',
                'judul' => $new->name,
                'text' => $new->text,
                'url' => ''
            ];
            array_push($result, $data);
        }
        $dt = [
            'result' => $result
        ];
        return view('user.search', $dt);
    }
}
