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

    public function create(){
        return view('pages/admin/add_scholar'); 
        //Taga tawa ang views 
    }
    public function store()
    {
        $scholarinfo = new ScholarInfoModel();
    
         // Get data from the form
            $first_name = $this->request->getVar('first_name'); 
            $middle_name = $this->request->getVar('middle_name');
            $last_name  = $this->request->getVar('last_name');
            $suffix = $this->request->getVar('suffix');
            $scholar_age = $this->request->getVar('age');
            $scholar_gender = $this->request->getVar('gender');
            $scholar_address = $this->request->getVar('address');
            $street = $this->request->getVar('street');
            $barangay = $this->request->getVar('barangay');
            $city = $this->request->getVar('city');
            $province = $this->request->getVar('province');
            $scholar_region = $this->request->getVar('scholar_region');
            $present_address = $this->request->getVar('present_address');
            $birthdate = $this->request->getVar('birthdate');
            $email = $this->request->getVar('email');
            $phone_num = $this->request->getVar('phone_num');
            $telephone_number = $this->request->getVar('telephone_number');

    // Save data to the database
    $scholarinfo->save([
        'firstname' => $first_name,
        'middlename' => $middle_name,
        'lastname' => $last_name,
        'suffix' => $suffix,
        'age' => $scholar_age,
        'gender' => $scholar_gender,
        'street' => $street,
        'barangay' => $barangay,
        'city' => $city,
        'province' => $province,
        'presentaddress' => $present_address,
        'birthdate' => $birthdate,
        'email' => $email,
        'phone_num' => $phone_num,
        'telephone_number' => $telephone_number
    ]);
    
        // Redirect back to scholars page with success message
        session()->setFlashdata("success", "Scholar information added successfully.");
        return redirect()->to(base_url('admin/scholars'));
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
