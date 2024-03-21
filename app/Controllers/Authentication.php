<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use CodeIgniter\RESTful\ResourceController;

class Authentication extends BaseController
{
    public function index()
    {
        //
    }
    public function login() {
        return view("Pages/Login/sign-in");
    }
    public function verification() {
        
        return view("Pages/Login/forgot-password");
    }
}
