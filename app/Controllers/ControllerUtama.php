<?php

namespace App\Controllers;

class ControllerUtama extends BaseController
{
    public function index()
    {
        return view('halaman-login');
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
}
