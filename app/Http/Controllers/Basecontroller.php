<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class Basecontroller extends Controller
{
    public function __construct(){
        $kategori = Kategori::all();
        View::share('key', 'hjvjhjh');
    }
}
