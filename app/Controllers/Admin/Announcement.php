<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Announcement extends BaseController
{
    public function index()
    {
        return view('pages/admin/add_announcement');

    }
  
}
    