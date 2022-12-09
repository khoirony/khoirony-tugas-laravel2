<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Sekolah;


class UserController extends Controller
{
    public function index(){
        $users   = User::paginate(10);
        return view("user.index", [
            'title' => 'List User',
            'users' => $users,
        ]);
    }

    public function detail($id){
        $user = User::query()
            ->where("id", $id)
            ->first();
        return view("user.detail", [
            'title' => 'Detail User',
            'user' => $user,
        ]);
    }

    public function edit($id){
        $sekolah   = Sekolah::all();
        $user = User::query()
            ->where("id", $id)
            ->first();
        return view("user.edit", [
            'title' => 'Edit User',
            'sekolah' => $sekolah,
            'user' => $user,
        ]);
    }

    // Tampilan tambah data
    public function create(){
        $sekolah   = Sekolah::all();
        return view("user.create", [
            'title' => 'Tambah User',
            'sekolah' => $sekolah
        ]);
    } 

    // fungsi tambah data
    public function store(Request $request){
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);
        User::create($request->all());
        return redirect()->back();
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $user->nama = $request->input('nama');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->role = $request->input('role');
        $user->update();
        return redirect()->back();
    }

    public function destroy($id){
        $user = User::where('id', $id)->delete();
        return redirect()->back();
    }
}
