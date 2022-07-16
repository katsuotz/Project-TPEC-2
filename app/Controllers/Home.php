<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function merchant () {
        return view('merchant/index');
    }
}
