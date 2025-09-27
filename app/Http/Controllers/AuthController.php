<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function register(Request $request){
        $validate = $request->validate([
            "lastname" => ['required', 'string'],
            "firstname" => ['required', 'string'],
            "email" => ['bail', 'email', 'unique:users'],
            "password" => ['bail', 'confirmed', Password::min(8)
                                                    ->letters()
                                                    ->numbers()
                                                    ->symbols()
            ]
        ]);

        User::create([
            "lastname" => $validate['lastname'],
            "firstname" => $validate['firstname'],
            "email" => $validate['email'],
            "password" => Hash::make($validate['password'])
        ]);

        return redirect('/admin/dashboard')->with('success', "Sign up established");
    }

    public function login(Request $request){
        $validate = $request->validate([
            "email" => ["email", "required", "string"],
            "password" => ["required", Password::min(8)
                                            ->letters()
                                            ->numbers()
                                            ->symbols()
            ]
        ]);

        if(!Auth::attempt($validate)){
            return back();
        }

        return to_route('admin.dashboard');
    }

    public function logout(){
        Auth::logout();

        return redirect('/admin/connexion');
    }

}
