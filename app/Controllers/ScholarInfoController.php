<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ScholarInfoModel;

class ScholarInfoController extends BaseController
{
    public function home()
    {
        $model = new ScholarInfoModel();

        // Fetch all scholar information from the model
        $data['scholar_info'] = $model->findAll();

        // Pass the data to the view
        return view('scholar_info', $data);
    }

    public function deleteScholar($id)
    {
        // Load the ScholarInfoModel
        $model = new ScholarInfoModel();

        // Find the scholar by ID
        $scholar = $model->find($id);

        if ($scholar) {
            $model->delete($id);
            return redirect()->to('/home')->with('success', 'Scholar deleted successfully.');
        } else {
            return redirect()->to(site_url('/home'))->with('error', 'Scholar not found.');
        }
    }
}
