<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function DocLogin(Request $request)
    {

        $email = $request->get('email');
        $password = $request->get('password');
        if (Auth::attempt(['email' => $email, 'password' => $password, 'user_type' => 'doctor'])) {
            return redirect()->intended('/doctor/dashboard');
        } else {
            return redirect()->back();
        }
    }


    public function rules($data)
    {
        $messages = [
            'email.required' => 'Please enter your email address',
            'email.exists' => 'Email already exists',
            'email.email' => 'Please enter a valid email address',
            'password.required' => 'Password is required',
            'password.min' => 'Password must be aleast 6 characters',

        ];

        $valid = Validator::make($data, [
            'email' => 'required|email|exists:users',
            'password' => 'required'
        ], $messages);
    }

    public function savedoc(Request $request)
    {

        $users = new User([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'user_type' => 'doctor',
            'spl' => $request->get('spl')
        ]);
        $users->save();

        return redirect()->intended('/doctor/login');
    }
}
