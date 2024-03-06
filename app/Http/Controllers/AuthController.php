<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('ppdb.pages.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->usertype == 1) {
                return redirect('dashboard')->with('success', 'Login successful! Welcome to the dashboard.');
            } else {
                return redirect('/dashboard-ppdb-siswa')->with('success', 'Login successful! Welcome back.');
            }
        } else {
            return redirect()->back()->withInput()->withErrors(['login' => 'Username or password is incorrect.']);
        }
    }

    public function showRegisterForm()
    {
        return view('ppdb.pages.form-register');
    }

    public function register(Request $request)
    {
        // Validasi data registrasi
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:6|confirmed',
            'jenis_kelamin' => 'required|string|max:10',
            'telephon' => 'required|string|max:20',
            'alamat' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'asal_sekolah' => 'required|string|max:255'
        ]);
        $existingUser = User::where('email', $request->email)->first();

        if ($existingUser !== null) {
            // Jika email sudah digunakan, kembalikan dengan pesan kesalahan
            return redirect()->back()->withInput($request->except('email'))
                ->withErrors(['email' => 'Email sudah digunakan. Silakan gunakan email lain.']);
        }

        // Proses registrasi user
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'telephon' => $request->input('telephon'),
            'alamat' => $request->input('alamat'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'asal_sekolah' => $request->input('asal_sekolah')
        ]);
 
        // Redirect setelah registrasi
        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Logout successful. See you next time!');
    }

}
