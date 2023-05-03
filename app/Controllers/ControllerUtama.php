<?php

namespace App\Controllers;

class ControllerUtama extends BaseController
{
    public function index()
    {
        return view('halaman-login');
    }
}
