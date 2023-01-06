<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\BobotModel;
use App\Models\PenilaianModel;

class Bobot extends BaseController
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
            'title'         => 'Perangkingan Dengan Metode Weighted Product',
            'sub'           => 'Halaman Bobot & Indikator',
            'validation' =>  \Config\Services::validation(),
            'bobot'         => $this->bobot->getData(),
            'admin'         => $this->admin->getAdmin($id_user)
        ];

        return view('admin/bobot', $data);
    }

    public function update($id_bobot)
    {
        $validasi = $this->validate([
            'c1' => [
                'label' => 'C1',
                'rules' => 'required|greater_than_equal_to[1]',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                    'greater_than_equal_to' => 'Tentukan Semua Bobot Terlebih Dahulu'
                ]
            ],
            'c2' => [
                'label' => 'C2',
                'rules' => 'required|greater_than_equal_to[1]',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                    'greater_than_equal_to' => 'Tentukan Semua Bobot Terlebih Dahulu'
                ]
            ],
            'c3' => [
                'label' => 'C3',
                'rules' => 'required|greater_than_equal_to[1]',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                    'greater_than_equal_to' => 'Tentukan Semua Bobot Terlebih Dahulu'
                ]
            ],
            'c4' => [
                'label' => 'C4',
                'rules' => 'required|greater_than_equal_to[1]',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                    'greater_than_equal_to' => 'Tentukan Semua Bobot Terlebih Dahulu'
                ]
            ],
            'c5' => [
                'label' => 'C5 Kelamin',
                'rules' => 'required|greater_than_equal_to[1]',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                    'greater_than_equal_to' => 'Tentukan Semua Bobot Terlebih Dahulu'
                ]
            ],
            'c6' => [
                'label' => 'C6',
                'rules' => 'required|greater_than_equal_to[1]',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                    'greater_than_equal_to' => 'Tentukan Semua Bobot Terlebih Dahulu'
                ]
            ]
        ]);

        if (!$validasi) {
            $validation = \Config\Services::validation();

            return redirect()->back()->withInput()->with('validation', $validation);
        } else {
            $data = [
                'c1'        => $this->request->getPost('c1'),
                'c2'        => $this->request->getPost('c2'),
                'c3'        => $this->request->getPost('c3'),
                'c4'        => $this->request->getPost('c4'),
                'c5'        => $this->request->getPost('c5'),
                'c6'        => $this->request->getPost('c6'),
            ];

            $this->bobot->update($id_bobot, $data);
            session()->setFlashdata('success', 'Data Berhasil Di Update');
            return redirect()->to('admin/bobot');
        }
    }

    public function proses($id_bobot)
    {
        $id_user = session()->get('id_user');
        $data = [
            'title'         => 'Perangkingan Dengan Metode Weighted Product',
            'sub'           => 'Halaman Bobot & Indikator',
            'bobot'         => $this->bobot->get($id_bobot),
            'nilai'         => $this->nilai->findAll(),
            'admin'         => $this->admin->getAdmin($id_user)
        ];

        return view('admin/proses', $data);
    }
}