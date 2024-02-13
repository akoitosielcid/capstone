<?php

namespace App\Controllers;

class account extends BaseController
{
    public function login(): string
    {
        return view('resource', [
            "title" => null,
            "style" => '/assets/css/login.css',
            "body" => view('login')
        ]);
    }

}
