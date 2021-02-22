<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class Newscontroller extends Controller
{
    public function index(){
        $news = News::latest()->first();
        $newsall = News::all();
        $data = [
            'news' => $news,
            'newsall' => $newsall
        ];
        return view('user.news', $data);
    }

    public function get_byid($id){
        $news = News::where('news_id', $id)->first();
        $newsall = News::all();
        $data = [
            'news' => $news,
            'newsall' => $newsall
        ];
        return view('user.news', $data);
    }

}
