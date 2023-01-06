<?php

namespace App\Controllers\Guru;

use App\Controllers\BaseController;
use App\Models\BobotModel;
use App\Models\ModelUser;
use App\Models\PenilaianModel;

class Home extends BaseController
{

    public function __construct()
    {
        $this->nilai = new PenilaianModel();
        $this->bobot = new BobotModel();
        $this->guru = new ModelUser();
    }

    public function index()
    {
        $id_guru = session()->get('id_guru');
        $data = [
            'title'     => 'Dashboard',
            'sub'       => 'Halaman Dashboard',
            'user'      => $this->guru->getData($id_guru)
        ];

        return view('guru/index', $data);
    }

    public function perhitungan()
    {
        $id_guru = session()->get('id_guru');
        $data = [
            'title'         => 'Perangkingan Dengan Metode Weighted Product',
            'sub'           => 'Halaman Bobot & Indikator',
            'mhs'         => $this->bobot->getData(),
            'nilai'         => $this->nilai->findAll(),
            'user'      => $this->guru->getData($id_guru)
        ];

        return view('guru/hasilPerhitungan', $data);
    }

    public function profile($id_guru)
    {
        $id_guru = session()->get('id_guru');
        $data = [
            'title'         => 'Update Profile',
            'sub'           => 'Halaman Profile',
            'validation' =>  \Config\Services::validation(),
            'user'         => $this->guru->getData($id_guru)
        ];

        return view('guru/profile', $data);
    }

    public function update($id_guru)
    {
        $dataLama = $this->guru->getData($this->request->getVar('id'));
        if ((isset($dataLama['username_guru'])) ? $dataLama['username_guru'] : '' == $this->request->getPost('username')) {
            $rule_username = 'required';
        } else {
            $rule_username = 'required|is_unique[guru.username_guru]';
        }

        $validasi = $this->validate([
            'nama' => [
                'label' => 'Nama',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong'
                ]
            ],
            'username' => [
                'label' => 'Username',
                'rules' => $rule_username,
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                    'is_unique' => '{field} Sudah Digunakan'
                ]
            ],
            'jabatan' => [
                'label' => 'Jabatan',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong'
                ]
            ],
            'jk' => [
                'label' => 'Jenis Kelamin',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong'
                ]
            ],
            'pendidikan' => [
                'label' => 'Pendidikan',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong'
                ]
            ],
            'kerja' => [
                'label' => 'Masa Kerja',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong'
                ]
            ],
            'tgl' => [
                'label' => 'Tanggal Lahir',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong'
                ]
            ],
            'level' => [
                'label' => 'Level',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong'
                ]
            ],
        ]);

        if (!$validasi) {
            $validation = \Config\Services::validation();
            return redirect()->back()->withInput()->with('validation', $validation);
        } else if ($this->request->getPost('password') != '') {
            $data = [
                'id_guru' => $id_guru,
                'nama_guru' => $this->request->getPost('nama'),
                'username_guru' => $this->request->getPost('username'),
                'password_guru' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'jabatan' => $this->request->getPost('jabatan'),
                'pendidikan' => $this->request->getPost('pendidikan'),
                'kerja' => $this->request->getPost('kerja'),
                'jk' => $this->request->getPost('jk'),
                'tgl_lahir' => $this->request->getPost('tgl'),
                'level' => $this->request->getPost('level'),
            ];
            $this->guru->update($id_guru, $data);
            session()->setFlashdata('success', 'Data Berhasil Di Update');
            return redirect()->to(base_url('guru/home/profile/' . $id_guru));
        } else {
            $data = [
                'id_guru' => $id_guru,
                'nama_guru' => $this->request->getPost('nama'),
                'username_guru' => $this->request->getPost('username'),
                // 'password_guru' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'jabatan' => $this->request->getPost('jabatan'),
                'pendidikan' => $this->request->getPost('pendidikan'),
                'kerja' => $this->request->getPost('kerja'),
                'jk' => $this->request->getPost('jk'),
                'tgl_lahir' => $this->request->getPost('tgl'),
                'level' => $this->request->getPost('level'),
            ];
            $this->guru->update($id_guru, $data);
            session()->setFlashdata('success', 'Data Berhasil Di Update');
            return redirect()->to(base_url('guru/home/profile/' . $id_guru));
        }
    }
}