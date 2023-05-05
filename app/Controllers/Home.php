<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('halaman-login');
    }
    public function login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $userModel = new \App\Models\UsersModel();
        $user = $userModel->where('username', $username)->first();
        $pass = $userModel->where('password', $password)->first();
        if ($user && $pass) {
            $_SESSION['user'] = $user;
            session()->remove('error');
            return redirect()->to('home');
        } else {
            session()->setFlashdata('error', 'Username atau password salah');
            return redirect()->to('login');
        }
    }
    public function homepage()
    {
        return view('dashboard-home');
    }
    public function datapage()
    {
        return view('data-home');
    }
    public function inventarispage()
    {
        return view('inventaris-home');
    }
    public function userpage()
    {
        return view('user-home');
    }
    public function statspage()
    {
        return view('stats-home');
    }
}
