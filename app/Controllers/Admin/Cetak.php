<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\BobotModel;
use App\Models\PenilaianModel;

class Cetak extends BaseController
{
    public function __construct()
    {
        $this->bobot = new BobotModel();
        $this->nilai = new PenilaianModel();
        $this->admin = new AdminModel();
    }

    public function index()
    {
        $id_user = session()->get('id_user');
        $data = [
            'title'     => 'Hasil Perangkingan Tabel Nilai dan Perhitungan',
            'sub'       => 'Halaman Hasil Penilaian',
            'mhs'       => $this->bobot->getData(),
            'nilai'     => $this->nilai->findAll(),
            'admin'         => $this->admin->getAdmin($id_user)
        ];

        return view('admin/hasil', $data);
    }

    public function print()
    {
        $semester = $this->request->getPost('semester');
        $tahun = $this->request->getPost('tahun');
        $data = [
            'title'     => 'Sekolah Islam Laduni Tigaraksa',
            'sub'       => 'Halaman Cetak',
            'tema'       => 'Laporan Hasil Penilaian kinerja Guru',
            'smt'       => $semester,
            'thn'       => $tahun,
            'mhs'       => $this->bobot->getData(),
            'nilai'     => $this->nilai->findAll()
        ];

        return view('admin/cetak', $data);
    }
}