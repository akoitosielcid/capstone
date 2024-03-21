<?php

namespace App\Models;

use CodeIgniter\Model;

class AllowOtp extends Model
{
    protected $table            = 'otp';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ["email","otp"];

    protected bool $allowEmptyInserts = false;


}
