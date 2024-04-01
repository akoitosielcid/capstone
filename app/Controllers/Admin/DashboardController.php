<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ScholarInfoModel;

class DashboardController extends BaseController
{
    public function __construct(){
        $this->model = new ScholarInfoModel();
    }

    public function index()
    {
        // $total_scolar = $this->db->query("SELECT COUNT(*) as total FROM scholar_info WHERE `graduate` = 'no' OR `graduate` IS NULL")->result();
        // $odsp = $this->db->query("SELECT COUNT(*) as total FROM scholar_info where program LIKE 'ODSP' AND `graduate` != 'yes'")->result();
        // $odsp_plus = $this->db->query("SELECT COUNT(*) as total FROM scholar_info where program LIKE 'ODSP+' AND `graduate` != 'yes'")->result();
        // $edpse = $this->db->query("SELECT COUNT(*) as total FROM scholar_info where program LIKE 'EDSP' AND `graduate` != 'yes'")->result();
        // $edpse_plus = $this->db->query("SELECT COUNT(*) as total FROM scholar_info where program LIKE 'EDSP+' AND `graduate` != 'yes'")->result();
        // $ELAP = $this->db->query("SELECT COUNT(*) as total FROM scholar_info where program LIKE 'ELAP%' AND `graduate` != 'yes'")->result();

      
        // $total_scolar = $this->model->where('graduate', 'no')->orWhere('graduate IS NULL')->countAllResults();
        // $odsp = $this->model->where('graduate', 'no')->orWhere('graduate IS NULL')->like('program', 'ODSP+', 'after')->countAllResults();
        // $odsp_plus = $this->model->where('graduate', 'no')->orWhere('graduate IS NULL')->like('program', 'ODSP+', 'after')->countAllResults();
        // $edpse = $this->model->where('graduate', 'no')->orWhere('graduate IS NULL')->like('program', 'EDSP', 'after')->countAllResults();
        // $edpse_plus = $this->model->where('graduate', 'no')->orWhere('graduate IS NULL')->like('program', 'EDSP+', 'after')->countAllResults();
        // $ELAP = $this->model->where('graduate', 'no')->orWhere('graduate IS NULL')->like('program', 'ELAP', 'after')->countAllResults();
        
        // $data['res'] = array(
        //     "total_scolar" => $total_scolar,
        //     "odsp" => $odsp,
        //     "odsp_plus" => $odsp_plus,
        //     "edpse" => $edpse,
        //     "edpse_plus" => $edpse_plus,
        //     "ELAP" => $ELAP
        // );
        
        return view('pages/admin/apps/dashboard/dashboard');
    }
}
