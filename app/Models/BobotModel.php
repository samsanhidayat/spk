<?php

namespace App\Models;

use CodeIgniter\Database\SQLite3\Table;
use CodeIgniter\Model;

class BobotModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'bobot';
    protected $primaryKey       = 'id_bobot';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_bobot', 'c1', 'c2', 'c3', 'c4', 'c5', 'c6'
    ];

    public function getData()
    {
        return $this->db->table('bobot')
            ->get()->getRowArray();
    }

    public function get($id_bobot)
    {
        return $this->db->table('bobot')
            ->where(['id_bobot' => $id_bobot])
            ->get()->getRowArray();
    }
}