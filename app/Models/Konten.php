<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konten extends Model
{
    use HasFactory;
    protected $table = 'contents';

    protected $fillable = ['name', 'text', 'file', 'category_id', 'subcategory_id'];
}
