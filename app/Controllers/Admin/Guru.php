<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\ModelUser;

class Guru extends BaseController
{

    public function __construct()
    {
        $this->user = new ModelUser();
        $this->admin = new AdminModel();
    }

    public function index()
    {
        $id_user = session()->get('id_user');
        $data = [
            'title' => 'Data Guru',
            'sub'  => 'Halaman Guru',
            'user' => $this->user->findAll(),
            'admin'         => $this->admin->getAdmin($id_user)
        ];

        return view('admin/guru', $data);
    }

    public function addGuru()
    {
        // session();
        $id_user = session()->get('id_user');
        $data = [
            'title' => 'Tambah Data Guru',
            'sub'  => 'Halaman Guru',
            'validation' =>  \Config\Services::validation(),
            'admin'         => $this->admin->getAdmin($id_user)
        ];
        return view('admin/addGuru', $data);
    }

    public function insert()
    {
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
                'rules' => 'required|is_unique[guru.username_guru]',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                    'is_unique' => '{field} Sudah Digunakan'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required|min_length[6]',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                    'min_length' => '{field} Minimal 6 Karakter'
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
        } else {
            $data = [
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

            $this->user->insert($data);
            session()->setFlashdata('success', 'Data Berhasil DItambahkan');
            return redirect()->to(base_url('admin/guru'));
        }
    }

    public function edit($id_guru)
    {
        $id_user = session()->get('id_user');
        $data = [
            'title' => 'Edit Data Guru',
            'sub'  => 'Halaman Guru',
            'validation' =>  \Config\Services::validation(),
            'user' => $this->user->getData($id_guru),
            'admin'         => $this->admin->getAdmin($id_user)
        ];

        return view('admin/editGuru', $data);
    }

    public function update($id_guru)
    {
        $dataLama = $this->user->getData($this->request->getVar('id'));
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
            $this->user->update($id_guru, $data);
            session()->setFlashdata('success', 'Data Berhasil diedit');
            return redirect()->to(base_url('admin/guru'));
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
            $this->user->update($id_guru, $data);
            session()->setFlashdata('success', 'Data Berhasil diedit');
            return redirect()->to(base_url('admin/guru'));
        }
    }

    public function hapus($id_guru)
    {
        $user = $this->user->getData($id_guru);

        if ($user) {
            $this->user->delete($id_guru);
            session()->setFlashdata('success', 'Data Berhasil Dihapus');
            return redirect()->to('admin/guru');
        }
    }

    public function detail($id_guru)
    {
        $id_user = session()->get('id_user');
        $data = [
            'title' => 'Detail Data Guru',
            'sub'  => 'Halaman Guru',
            'user' => $this->user->getData($id_guru),
            'admin'         => $this->admin->getAdmin($id_user)
        ];


        return view('admin/detailGuru', $data);
    }
}