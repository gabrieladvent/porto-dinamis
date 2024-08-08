<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('Admin.login');
    }

    public function Login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required',
        ], [
            'email.required' => 'Kolom Email Wajib Diisi',
            'password.required' => 'Kolom Password Wajib Diisi',
        ]);

        $info_login = [
            'email' => $request->email,
            'password' => $request->password
        ];

        // Ambil informasi User-Agent
        $userAgent = $request->header('User-Agent');

        if (Auth::attempt($info_login)) {
            Log::channel('login')->info('Login Berhasil', [
                'email' => $request->email,
                'timestamp' => now(),
                'ip' => $request->ip(),
                'user_agent' => $userAgent,
            ]);
            return redirect()->to('admin/profile')->with('Sukses', 'Berhasil Login!');
        } else {
            Log::channel('login')->warning('Login Gagal', [
                'email' => $request->email,
                'timestamp' => now(),
                'ip' => $request->ip(),
                'user_agent' => $userAgent,
            ]);
            return redirect()->to('/login')->withErrors('Email Atau Password Yang Anda Masukan Tidak Valid');
        }
    }


    public function logout(Request $request)
    {
        $userAgent = $request->header('User-Agent');
        Log::channel('login')->info('Logout', [
            'email' => Auth::user()->name,
            'timestamp' => now(),
            'ip' => $request->ip(),
            'user_agent' => $userAgent,
        ]);
        Auth::logout();
        return redirect()->to('/login')->with('Sukses', 'Berhasil Logout');
    }
}
