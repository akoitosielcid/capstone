<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AnnouncementController extends BaseController
{
    public function index()
    {
        return view('pages/admin/announcements');

    }

    public function addAnnouncement()
    {
        return view('pages/admin/add_announcement');

    }
}
