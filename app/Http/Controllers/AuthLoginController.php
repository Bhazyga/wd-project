<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class AuthLoginController extends Controller
{


    protected $redirectTo = '/about'; // Where to redirect after login.

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('login');
    }

    protected function authenticated(Request $request, $user)
    {
        // Customize what happens after a user is authenticated.
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();

        return redirect('/'); // Where to redirect after logout.
    }
}


class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME; // Where to redirect after registration.

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
