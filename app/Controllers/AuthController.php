<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class AuthController extends BaseController
{
    protected User $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function login()
    {
        return view('auth/login');
    }

    public function doLogin()
    {
        $request = $this->request->getPost();
        $user = $this->user->where('email', $request['email'])->first();

        if (!$user) return redirect()->back()->with('error', 'User tidak ditemukan');

        if (password_verify($request['password'], $user['password'])) {
            $session_data = [
                'user_id' => $user['user_id'],
                'name' => $user['name'],
                'email' => $user['email'],
                'role' => $user['role'],
            ];
            session()->set('user', $session_data);
            return redirect()->to('/');
        }

        return redirect()->back()->with('error', 'Password tidak sesuai');
    }

    public function register()
    {
        return view('auth/register');
    }

    public function logout()
    {
        session()->remove('user');
        return redirect()->to('/login');
    }
}
