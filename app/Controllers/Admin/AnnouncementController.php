<?php

namespace App\Controllers\Admin;
use App\Models\AnnouncementModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AnnouncementController extends BaseController
{
    public function __construct(){
        $this->announcements = new AnnouncementModel();
    }
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


        // $announcement = new AnnouncementModel();
        $announcement_description = $this->request->getVar('announcement_desc');
        //kinukuha ang variable

        $this->announcements->save([
            'announcement_desc' => $announcement_description,
            'date_posted' => $date_posted,
            'announcement_stat' => "Approved"
            
        ]);
        
        session()->setFlashdata("success", "Nakapasok na tayo sa db ng isa.");
        return redirect()->to(base_url('admin/announcements'));
    }

        
    public function edit($id){
        // $announcements = new AnnouncementModel();
        $data['announcement_desc'] = $this->announcements->where('id_announcement', $id)->first();

        return view('pages/admin/edit_announcement', $data);
    }

    public function update(){
        // $announcements = new AnnouncementModel();
        $data = [
            'announcement_desc' => $this->request->getVar('announcement_desc'),
        ];
        $id_announcement = $this->request->getVar('id_announcement');
        $this->announcements->update($id_announcement, $data);

        session()->setFlashdata("success", "Nakapag-update na tayo sa db ng isa.");
        return redirect()->to(base_url('admin/announcements'));
    }

    public function delete($id){
        // Delete the announcement from the database
        $this->announcements->delete($id);
        
        // Set a success flash message
        session()->setFlashdata("success", "Nakapag-delete na tayo sa db ng isa.");
        
        // Redirect to the admin/announcements page
        return redirect()->to(base_url('admin/announcements'));
        // return view('pages/admin/announcements');
    }
    
}
