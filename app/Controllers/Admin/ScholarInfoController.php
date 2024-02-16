<?php

namespace App\Controllers\Admin;
use App\Models\ScholarInfoModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ScholarInfoController extends BaseController
{
 
    public function index()
    {
        // $model = new ScholarInfoModel();
        $scholar_info = new ScholarInfoModel();
        // // Fetch all scholar information from the model
        $data['scholar_info'] = $scholar_info->findAll();

        // Pass the data to the view
        return view('pages/admin/scholar',$data);
    }

    public function AddScholar(){
        return view('pages/admin/add_scholar'); 
        //Taga tawa ang views 
    }

    public function store(){
        $scholarinfo = new ScholarInfoModel();

        $scholar_name = $this->request->getVar('scholar_name');
        $scholar_age = $this->request->getVar('age');
        //kinukuha ang variable

        $scholarinfo->save([
            'scholar_name' => $scholar_name,
            'scholar_age' => $scholar_age
        ]);
        
        session()->setFlashdata("success", "Nakapasok na tayo sa db ng isa.");
        return redirect()->to(base_url(''));
    }

    public function deleteScholar($id)
    {
        // Load the ScholarInfoModel
        // $model = new ScholarInfoModel();

        // Find the scholar by ID
        // $scholar = $model->find($id);

        // if ($scholar) {
        //     $model->delete($id);
        //     return redirect()->to('/home')->with('success', 'Scholar deleted successfully.');
        // } else {
        //     return redirect()->to(site_url('/home'))->with('error', 'Scholar not found.');
        // }
    }
}
