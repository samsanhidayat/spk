<?php

namespace App\Models;

use CodeIgniter\Model;

class PenilaianModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'nilai2';
    protected $primaryKey       = 'id_nilai2';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_nilai2', 'nama', 'kelas', 'k1', 'k2', 'k3', 'k4', 'k5', 'k6', 'k7', 'k8', 'k9', 'k10', 'k11', 'k12', 'k13', 'k14', 'k15', 'k16', 'k17', 'k18', 'k19', 'k20', 'k21', 'k22', 'k23', 'k24', 'k25', 'k26', 'k27', 'k28', 'k29', 'k30', 'k31', 'k32', 'k33', 'k34', 'k35', 'k36', 'k37', 'k38', 'k39', 'k40'
    ];

    public function get($id_nilai2)
    {
        return $this->db->table('nilai2')
            ->where(['id_nilai2' => $id_nilai2])
            ->get()->getResultArray();
    }
}