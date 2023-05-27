<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index',[
            'title' => "Register",
            'active' => "register"
        ]);
    }
    public function store(Request $request){
        $ValidatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required','min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);
        // $ValidatedData['password'] = bcrypt($ValidatedData['password']);
        $ValidatedData['password'] = Hash::make($ValidatedData['password']);
        User::create($ValidatedData);
        // $request = session();
        // $request->session()->flash('success', 'Registrasi Berhasil! Silahkan login');
        return redirect('/login')->with('success', 'Registrasi Berhasil! Silahkan Login');
    }
}
