<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Pengguna;


class AuthController extends Controller
{
    public function login(Request $request){
        if ($request->method() == "GET"){
            return view("auth.login", [
                "title" => "Login"
            ]);
        }

        $email = $request->input("email");
        $password = $request->input("password");

        $pengguna = Pengguna::query()
            ->where("email", $email)
            ->first();
        if($pengguna == null){
            return redirect()
                ->back()
                ->withErrors([
                    "msg" => "Email tidak ditemukan"
                ]);
        }
        if(!Hash::check($password, $pengguna->password)){
            return redirect()
                ->back()
                ->withErrors([
                    "msg" => "password salah!"
                ]);
        }

        if(!session()->isStarted()) session()->start();
        session()->put("logged", true);
        session()->put("id", $pengguna->id);
        session()->put("nama", $pengguna->nama);
        return redirect()->route("produk.index");
    }

    public function logout(Request $request){
        session()->flush();
        return redirect()->route("login");
    }
}
