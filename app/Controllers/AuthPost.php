<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\AuthModel;
use App\Models\AllowOtp;

class AuthPost extends BaseController
{
    public function __construct() {
        $this->model = new AuthModel();
        $this->email = \Config\Services::email();
        $this->otp = new AllowOtp();
    }
    public function log(RequestInterface $request = null)
    {
        header('Content-Type: application/json');
        $postData = json_decode(file_get_contents('php://input'), true);
    
        $res = $this->model->where('username', $postData['email'])->where('account_password', $postData['pass'])->countAllResults();
    
        if ($res === 0) {
            echo json_encode([
                "message" => [
                    "type" => "danger",
                    "content" => "This account doesn't exist in this database"
                ]
            ]);
            return;
        } else {
            $account = $this->model->where('username', $postData['email'])->where('account_password', $postData['pass'])->first();
    
            if (($account["account_status"] == 'activate' || $account["account_status"]) == 'active'  ) {
                // Perform necessary actions for active account
            } else {
                echo json_encode([
                    "message" => [
                        "type" => "warning",
                        "content" => "This account under reviewing, contant to admin to more information"
                    ]
                ]);
                return;
            }
        }
    }
    public function sendVerification() {
        
        header('Content-Type: application/json');
        $postData = json_decode(file_get_contents('php://input'), true);

        $res = $this->model->where('email', $postData['email'])->countAllResults();
    
        if($res==0) {
            echo json_encode([
                "message" => [
                    "type" => "warning",
                    "content" => "This email doesnt't exist in our database"
                ]
            ]);
            return;
        }
        else {
            $ran = $this->generateRandomString();
            
            $this->otp->insert([
                "otp"=>$ran,
                "email"=>$postData['email']
            ]);

            if(mail('koutayuzuki565@gmail.com', 'Hi user', 'Your out code is: '.$ran)) {
            
                    return redirect()->to(site_url('success'));
                
                }
        }
    }
    public function verificationCode() {
        header('Content-Type: application/json');
        $postData = json_decode(file_get_contents('php://input'), true);
    }
}
