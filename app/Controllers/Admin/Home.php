<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class Home extends BaseController
{
    public function __construct()
    {
        $this->admin = new AdminModel();
    }

    public function index()
    {
        $id_user = session()->get('id_user');
        $data = [
            'title'     => 'Dashboard',
            'sub'       => 'Halaman Dashboard',
            'admin'         => $this->admin->getAdmin($id_user)
        ];
        return view('admin/index', $data);
    }

    public function profile($id_user)
    {
        $id_user = session()->get('id_user');
        $data = [
            'title'         => 'Update Profile',
            'sub'           => 'Halaman Profile',
            'validation' =>  \Config\Services::validation(),
            'admin'         => $this->admin->getAdmin($id_user)
        ];

        return view('admin/profile', $data);
    }

    public function update($id_user)
    {
        $dataLama = $this->admin->getAdmin($this->request->getVar('id'));
        if ((isset($dataLama['username'])) ? $dataLama['username'] : '' == $this->request->getPost('username')) {
            $rule_username = 'required';
        } else {
            $rule_username = 'required|is_unique[user.username]';
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
                'id_user' => $id_user,
                'nama' => $this->request->getPost('nama'),
                'username' => $this->request->getPost('username'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'level' => $this->request->getPost('level'),
            ];
            $this->admin->update($id_user, $data);
            session()->setFlashdata('success', 'Data Berhasil Di Update');
            return redirect()->to(base_url('admin/home/profile/' . $id_user));
        } else {
            $data = [
                'id_user' => $id_user,
                'nama' => $this->request->getPost('nama'),
                'username' => $this->request->getPost('username'),
                // 'password_guru' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'level' => $this->request->getPost('level'),
            ];
            $this->admin->update($id_user, $data);
            session()->setFlashdata('success', 'Data Berhasil Di Update');
            return redirect()->to(base_url('admin/home/profile/' . $id_user));
        }
    }
}