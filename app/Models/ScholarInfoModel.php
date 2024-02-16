<?php

namespace App\Models;

use CodeIgniter\Model;

class ScholarInfoModel extends Model
{
    protected $table            = 'scholar_info';
    protected $primaryKey       = 'scholar_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['user_id','firstname', 'middlename', 'lastname', 'suffix', 'age', 'gender', 'address', 'street', 'barangay', 'city', 'province', 'scholar_region', 'presentaddress', 'birthdate', 'email', 'phone_num', 'telephone_number'];
  
    protected bool $allowEmptyInserts = false;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
