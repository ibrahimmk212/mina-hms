<?php

namespace App\Http\Controllers;

use Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class AuthController extends Controller
{
    public function login()
    {
        if (!empty(Auth::check())) {
            if (Auth::user()->role == 'admin') {
                return redirect('admin');
            }
            if (Auth::user()->role == 'doctor') {
                return redirect('doctor');
            }
            if (Auth::user()->role == 'nurse') {
                return redirect('nurse');
            }
            return view('auth.login');
        }
        return view('auth.login');
    }

    public function auth_login(Request $request)
    {

        // create admin if not exists
        $admins = User::where('role', 'admin')->get();
        if ($admins->isEmpty()) {
            $admin = new User();
            $admin->name = 'Super Admin';
            $admin->email = 'amina@shms.com';
            $admin->role = 'admin';
            $admin->password = Hash::make('123456');
            $admin->save();
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // check if user is admin
            if (Auth::user()->role == 'admin') {
                return redirect('admin');
            }
            // check if user is doctor
            if (Auth::user()->role == 'doctor') {
                return redirect('doctor');
            }
            // check if user is nurse
            if (Auth::user()->role == 'nurse') {
                return redirect('nurse');
            }
            return redirect('/');
        } else {
            return redirect()->back()->with('error', 'Invalid email or password');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
