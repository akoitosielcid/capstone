<?php

namespace App\Controllers\Admin;
use App\Models\AnnouncementModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AnnouncementController extends BaseController
{
    // public function __construct(){
    //     $this->announcement = new AnnouncementModel();
    // }
    public function index()
    {
        $announcements = new AnnouncementModel();
        $data['announcement'] = $announcements->findall();
        return view('pages/admin/announcements', $data);

    }

    public function create()
    {
        return view('pages/admin/add_announcement');

    }
    public function store(){
        helper('date');
        $currentDate = new \DateTime();
        $formattedDate = $currentDate->format('Y-m-d H:i:s');
        $date_posted['date_posted'] = $formattedDate;


        $announcement = new AnnouncementModel();
        $announcement_description = $this->request->getVar('announcement_desc');
        //kinukuha ang variable

        $announcement->save([
            'announcement_desc' => $announcement_description,
            'date_posted' => $date_posted,
            'announcement_stat' => "Approved"
            
        ]);
        
        session()->setFlashdata("success", "Nakapasok na tayo sa db ng isa.");
        return redirect()->to(base_url('admin/announcements'));
    }
}
