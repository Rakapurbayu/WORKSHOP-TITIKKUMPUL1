<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Registrasi;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
        }
        return view('pages.auth.login');
    }

    public function register()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }
        return view('pages.auth.register');
    }

    // public function loginForm(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);

    //     $minta = $request->only('email', 'password');

    //     if (Auth::attempt($minta)) {
    //         Session::flash('success', 'Login Berhasil');
    //         return redirect()->intended(route('home'));
    //     }

    //     Session::flash('error', 'Login Invalid. Please try again.');
    //     return redirect(route('login'));
    // }

//     public function loginForm(Request $request)
// {
//     $request->validate([
//         'email' => 'required|email',
//         'password' => 'required',
//     ]);

//     if (Auth::attempt($request->only('email', 'password'))) {
//         $user = Auth::user();

//         // Check the user's role or any other logic
//         if ($user->role == 'U') {
//             // Redirect to the user home
//             return redirect()->intended(route('home'));
//         } elseif ($user->role == 'V') {
//             // Redirect to the vendor list
//             return redirect()->intended(route('ListVendor'));
//         }
//     }

//     // Invalid login
//     return redirect(route('login'))->with('error', 'Login Invalid. Please try again.');
// }

public function loginForm(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);

        $user = User::where('email', $credentials['email'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            Auth::login($user);
            $request->session()->regenerate();

            if ($user->ROLE === "U") { // user biasa
                // Pengguna dengan role 0 (misalnya pengguna biasa) diarahkan ke 'home'
                return redirect()->intended(route('home'));

            } elseif ($user->ROLE === "V") { // admin website
                // Pengguna dengan role 1 (misalnya admin) diarahkan ke 'admin.home'
                return redirect()->intended(route('ListVendor'));
            }
        }

        return redirect(route('login'))->with('error', 'Login Invalid. Please try again.');
    }

    function registerForm(Request $request)
    {
        $request->validate([
            'username' => ['required', 'min:3', 'max:20', Rule::unique('user', 'username')],
            'email' => ['required', Rule::unique('user', 'email')],
            'password' => ['required', 'min:8', 'max:20'],
            'role' => ['required', 'in:U,V']
        ]);

        $data['username'] = $request->username;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['role'] = $request->role;

        $user = User::create($data);
        if (!$user) {
            return redirect(route('register'))->with('error', 'Registration failed, try again!');
        }
        return redirect(route('login'))->with('success', 'Registration success');
    }

    function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }

    // ORIGINAL AUTHCONTROLLER

    // public function register(Request $request){
    //     $request->validate([
    //         'USERNAME' => 'required|unique:user',
    //         'PASSWORD' => 'required|min:8',
    //         'EMAIL' => 'required|unique:registrasi|email',
    //         'ROLE' => 'required|in:U,V', // U = User, V = Vendor
    //     ]);

    //     // $data = $request->all();
    //     // $data['PASSWORD'] = Hash::make($data['PASSWORD']);

    //     // Registrasi::create($data);

    //     $role = $request->input('ROLE');

    //     $user = User::create([
    //         'USERNAME' => $request->input('USERNAME'),
    //         'PASSWORD' => Hash::make($request->input('PASSWORD')),
    //         'ROLE' => $role,
    //     ]);

    //     Registrasi::create([
    //         'ID_USER' => $user->ID_USER,
    //         'TANGGAL_REGIS' => now(),
    //         'USERNAME' => $request->input('USERNAME'),
    //         'PASSWORD' => Hash::make($request->input('PASSWORD')),
    //         'EMAIL' => $request->input('EMAIL'),
    //     ]);

    //     dd('Registration data saved successfully');
    //     //return redirect()->route('login')->with('success', 'Registration success');
    // }

    //DEBUGIING DI BAWAH

    //     public function register(Request $request)
    // {
    //     try {
    //         $request->validate([
    //             'username' => 'required|unique:user',
    //             'password' => 'required|min:8',
    //             'email' => 'required|unique:registrasi|email',
    //             'role' => 'required|in:U,V', // U = User, V = Vendor
    //         ]);

    //         $role = $request->input('role');

    //         \Log::info('User creation input data:', [
    //             'USERNAME' => $request->input('username'),
    //             'PASSWORD' => $request->input('password'),
    //             'ROLE' => $role,
    //         ]);

    //         $user = User::create([
    //             'USERNAME' => $request->input('USERNAME'),
    //             'PASSWORD' => Hash::make($request->input('PASSWORD')),
    //             'ROLE' => $role,
    //         ]);

    //         if (!$user) {
    //             return redirect(route('registration'))->with("error", "User creation failed");
    //         }

    //         Registrasi::create([
    //             'ID_USER' => $user->ID_USER,
    //             'TANGGAL_REGIS' => now(),
    //             'USERNAME' => $request->input('username'),
    //             'PASSWORD' => Hash::make($request->input('password')),
    //             'EMAIL' => $request->input('email'),
    //         ]);

    //         return redirect(route('login'))->with("success", "Registration Success!");
    //     } catch (\Exception $exception) {
    //         // Log the exception for further investigation
    //         \Log::error($exception);

    //         return redirect(route('register'))->with("error", "An unexpected error occurred. Please try again.");
    //     }
    // }
}
