<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function kategori()
    {
        return $this->belongsTo('App\Models\Kategori', 'id_kategori');
    }
    public function penulis()
    {
        return $this->belongsTo('App\Models\Pengguna', 'id_penulis');
    }
}
