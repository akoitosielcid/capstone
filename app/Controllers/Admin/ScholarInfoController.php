<?php

namespace App\Controllers\Admin;
use App\Models\ScholarInfoModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ScholarInfoController extends BaseController
{
    public function __construct(){
        $this->scholar_info = new ScholarInfoModel();
    }

    public function index()
    {
        // $model = new ScholarInfoModel();
        // $scholar_info = new ScholarInfoModel();
        // // Fetch all scholar information from the model
        $data['scholar_info'] = $this->scholar_info->findAll();

        // Pass the data to the view
        return view('pages/admin/scholarinfo/scholar',$data);
    }

    public function create(){
        return view('pages/admin/scholarinfo/add_scholar'); 
        //Taga tawa ang views 
    }
    public function store()
    {
        // $scholarinfo = new ScholarInfoModel();
    
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
    

    public function edit($id) {
        $data['scholar_info'] = $this->scholar_info->where('scholar_id', $id)->first();
        return view('pages/admin/scholarinfo/edit_scholar',$data); 
    }
    
    public function update() {
        // $scholar_info = new ScholarInfoModel();
        $data = [
            'firstname' => $this->request->getVar('firstname'),
            'middlename' => $this->request->getVar('middlename'),
            'lastname' => $this->request->getVar('lastname'),
            'suffix' => $this->request->getVar('suffix'),
            'age' => $this->request->getVar('age'),
            'gender' => $this->request->getVar('gender'),
            'street' => $this->request->getVar('street'),
            'barangay' => $this->request->getVar('barangay'),
            'city' => $this->request->getVar('city'),
            'province' => $this->request->getVar('province'),
            'presentaddress' => $this->request->getVar('presentaddress'),
            'birthdate' => $this->request->getVar('birthdate'),
            'email' => $this->request->getVar('email'),
            'phone_num' => $this->request->getVar('phone_num'),
            'telephone_number' => $this->request->getVar('telephone_number')
        ];

        $scholar_id = $this->request->getVar('scholar_id');
        $this->scholar_info->update($scholar_id, $data);

        session()->setFlashdata("success", "Nakapag-update na tayo sa db ng isa.");
        return redirect()->to(base_url('admin/scholars'));
        // return view('pages/admin/scholarinfo/scholar'
    }
       
    
    public function delete($id)
    {
       // Delete the announcement from the database
       $this->scholar_info->delete($id);
        
       // Set a success flash message
       session()->setFlashdata("success", "Nakapag-delete na tayo sa db ng isa.");
       
       // Redirect to the admin/announcements page
       return redirect()->to(base_url('admin/scholars'));
       // return view('pages/admin/announcements');
    }
    
}
