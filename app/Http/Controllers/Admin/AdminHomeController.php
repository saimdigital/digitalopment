<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Str;
use Carbon\Carbon; 
use Hash;
use Auth;
use DB; 
use Mail; 

class AdminHomeController extends Controller
{
    public function register()
    {
        return view('admin.admin_auth.register');
    }
    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('admin');
    }
    public function login()
    {
        return view('admin.admin_auth.login');
    }
    public function store(Request $request)
    {

        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('admin/dashboard');
        }

        return redirect('admin')->with('error', 'Oppes! You have entered invalid credentials');
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/admin');
    }
    public function getEmail()
    {
        return view('admin.admin_auth.forgot-password');
    }
    public function postEmail(Request $request)
    {
      $request->validate([
          'email' => 'required|email|exists:users',
      ]);
  
      $token = Str::random(60);
  
        DB::table('password_resets')->insert(
            ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
        );
  
        Mail::send('admin.admin_auth.verify',['token' => $token], function($message) use ($request) {
            $message->from($request->email);
            $message->to('ahmedrazadigitalop@gmail.com');
            $message->subject('Reset Password Notification');
         });
  
        return back()->with('message', 'We have e-mailed your password reset link!');
    }
    public function getPassword($token) {

        return view('admin.admin_auth.reset-password', ['token' => $token]);
    }
    public function updatePassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required',
        ]);

        User::where('email', $request->email)->update(['password' => Hash::make($request->password)]);

        DB::table('password_resets')->where(['email'=> $request->email])->delete();

          return redirect('/admin')->with('message', 'Your password has been changed!');

    }
}