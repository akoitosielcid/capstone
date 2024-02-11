<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function home(): string
    {
        return view('website/home');
    }

    public function about(): string
    {
        return view('website/about');
    }
}
