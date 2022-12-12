<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function blog()
    {
        return $this->hasMany('App\Models\Blog', 'id_blog');
    }
}
