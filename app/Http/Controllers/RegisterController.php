<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Log;


class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
	public function create(Request $request){

		// Log dữ liệu đầu vào của form
        Log::info('Login attempt:', $request->all());

		// valtidate input
		$request->validate([
            'name' => 'required|string|max:20',
            'email' => 'required|string|email|max:20|unique:users',
            'password' => 'required|string|min:3|confirmed',
        ]);

		// Log dữ liệu đầu vào của form
        Log::info('After Validate==>>> :', $request->all());

		$user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
		
        Log::info('User registered:', ['user' => $user]);

		// login new user
		Auth::login($user);

		return redirect('/');
	}
}