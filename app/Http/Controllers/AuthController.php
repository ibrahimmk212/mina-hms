<?php

namespace App\Http\Controllers;

use Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Mail\SendOTP; // Create this Mailable
// use Auth;

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
            if (Auth::user()->role == 'pharmacist') {
                return redirect('pharmacist');
            }
            return view('auth.login');
        }
        return view('auth.login');
    }

    public function auth_login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Authenticate user
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
    
            // Generate OTP
            $otp = rand(100000, 999999);
            $user->otp = $otp;
            $user->otp_expires_at = Carbon::now()->addMinutes(5); // OTP expires in 5 minutes
            $user->save();
    
            // Send OTP via email
            Mail::to($user->email)->send(new SendOTP($otp));
    
            // Redirect to OTP verification page
            return redirect()->route('verify.otp');
        }
    
        return redirect()->back()->with('error', 'Invalid email or password');
    }

    public function verifyOtp(Request $request)
{
    $request->validate([
        'otp' => 'required|numeric',
    ]);

    $user = Auth::user();

    if ($user->otp === $request->otp && $user->otp_expires_at > Carbon::now()) {
        // OTP is valid
        $user->otp = null;
        $user->otp_expires_at = null;
        $user->save();

        // Redirect based on user role
        if ($user->role === 'admin') return redirect('admin');
        if ($user->role === 'doctor') return redirect('doctor');
        if ($user->role === 'nurse') return redirect('nurse');
        if ($user->role === 'pharmacist') return redirect('pharmacist');

        return redirect('/');
    }

    return redirect()->back()->with('error', 'Invalid or expired OTP');
}
    

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    protected function ensureAdminExists()
    {
        // Check if an admin already exists
        if (!User::where('role', 'admin')->exists()) {
            // Create a default admin account
            User::create([
                'name' => 'Default Admin',
                'email' => 'aii@shms.com', // Use a secure default email
                'password' => Hash::make('123456'), // Use a secure default password
                'role' => 'admin',
            ]);
        }
    }

}



