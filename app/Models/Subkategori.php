<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subkategori extends Model
{
    use HasFactory;
    protected $table = 'subcategories';
    protected $fillable = ['categories_id', 'name'];

    public function kategori(){
        return $this->belongsTo('App\Models\Kategori', 'categories_id', 'category_id');
    }
}
