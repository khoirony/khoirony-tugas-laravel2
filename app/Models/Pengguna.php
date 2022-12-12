<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;


class Pengguna extends Model
{
    use HasFactory;
    public $guarded = ["id"];
    protected $table = "penggunas";

    public function blog()
    {
        return $this->hasMany('App\Models\Pengguna', 'id_penulis');
    }

    protected static function boot()
    {
        parent::boot();    //menjalankan fungsi static

        // ketika menginsert pasword di hash terlebbih dulu
        static::creating(function(Pengguna $pengguna){
            $pengguna->password = Hash::make($pengguna->password);
        });

        // ketika mengupdate password dicek apakah ada perubahan atau tidak
        static::updating(function(Pengguna $pengguna){
            if($pengguna->isDirty(["password"])){
                $pengguna->password = Hash::make($pengguna->password); //jika ada perubahan maka di hash dulu
            }
        });
    }
}
