<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('include/header');
        return view('home');
        echo view('include/footer');
    }
}
