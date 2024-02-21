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
    protected $allowedFields    = ['user_id', 'firstname', 'middlename', 'lastname', 'suffix', 'age', 'gender', 'address', 'street','barangay','city','province','scholar_region', 'presentaddress', 'birthdate', 'email', 'phone_num', 'telephone_number', 'religion', 'citizenship', 'OFW_firstname', 'OFW_middlename', 'OFW_lastname', 'OFW_suffix', 'OFW_relationship', 'OFW_email', 'category', 'school', 'school_address', 'program', 'number_siblings', 'fatherstatus', 'father_fname', 'father_mname', 'father_lname', 'father_suffix', 'father_occupation', 'father_contactnum', 'Father_Educ', 'father_email', 'motherstatus', 'mother_fname', 'mother_mname', 'mother_lname', 'mother_suffix', 'mother_occupation', 'mother_contactnum', 'mother_email', 'mother_Educ', 'Course', 'year_level', 'primary_school', 'primary_year_from', 'primary_year_to', 'primary_award', 'secondary_school', 'secondary_year_from', 'secondary_award', 'tertiary_school', 'tertiary_year_from', 'tertiary_year_to', 'tertiary_award', 'secondary_year_to', 'remarks', 'graduate', 'graduated_at', 'deleted_at'];

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
