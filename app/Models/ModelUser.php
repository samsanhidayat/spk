<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUser extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'guru';
    protected $primaryKey       = 'id_guru';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_guru', 'nama_guru', 'jabatan', 'pendidikan', 'username_guru', 'password_guru', 'kerja', 'jk', 'tgl_lahir', 'level'
    ];

    public function getData($id_guru)
    {
        return $this->db->table('guru')
            ->where(['id_guru' => $id_guru])
            ->get()->getRowArray();
    }
}