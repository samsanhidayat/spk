<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'user';
    protected $primaryKey       = 'id_user';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_user', 'nama', 'username', 'password', 'level'
    ];

    public function getAdmin($id_user)
    {
        return $this->db->table('user')
            ->where(['id_user' => $id_user])
            ->get()->getRowArray();
    }
}