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
    public function register_case()
    {
        return view('register_case/register_case');
    }
    public function case_file()
    {
        return view('case_file/case_file');
    }
}
