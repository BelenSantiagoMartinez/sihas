<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('layouts/main.php');
    }
    public function login()
    {
        return view('login/login');
    }
    public function register_admin()
    {
        return view('register_admin/register_admin');
    }
}
