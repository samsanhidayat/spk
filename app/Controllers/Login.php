<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\ModelUser;

class Login extends BaseController
{

    public function __construct()
    {
        $this->guru = new ModelUser();
        $this->admin = new AdminModel();
    }

    public function index()
    {
        $data = [
            'title'     => 'Login',
            'sub'       => 'Halaman Login',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/login', $data);
    }

    public function proses()
    {
        $valid = $this->validate([
            'username' => [
                'label'         => 'Username',
                'rules'         => 'required',
                'errors'        => [
                    'required'  => '{field} Tidak Boleh Kosong'
                ]
            ],
            'password'          => [
                'label'         => 'Password',
                'rules'         => 'required',
                'errors'        => [
                    'required'  => '{field} Tidak Boleh Kosong'
                ]
            ]
        ]);
        if (!$valid) {
            $validation = \Config\Services::validation();
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $admin = $this->admin->where(['username' => $username])->first();
        $guru = $this->guru->where(['username_guru' => $username])->first();

        if ($admin) {
            if (password_verify($password, $admin['password'])) {
                $data = [
                    'isLogin'   => true,
                    'id_user'   => $admin['id_user'],
                    'nama'      => $admin['nama'],
                    'username'  => $admin['username'],
                    'level'     => $admin['level'],
                ];
                session()->set($data);
                session()->setFlashdata('success', 'Berhasil Login');
                return redirect()->to(base_url('admin/home'));
            } else {
                session()->setFlashdata('error1', 'Password Salah');
                return redirect()->to(base_url('login'));
            }
        } else if ($guru) {
            if (password_verify($password, $guru['password_guru'])) {
                $data = [
                    'isLogin'   => true,
                    'id_guru'   => $guru['id_guru'],
                    'nama_guru'      => $guru['nama_guru'],
                    'jabatan'  => $guru['jabatan'],
                    'pendidikan'  => $guru['pendidikan'],
                    'username_guru'  => $guru['username_guru'],
                    'kerja'  => $guru['kerja'],
                    'jk'  => $guru['jk'],
                    'tgl_lahir'  => $guru['tgl_lahir'],
                    'level'     => $guru['level'],
                ];
                session()->set($data);
                session()->setFlashdata('success', 'Berhasil Login');
                return redirect()->to(base_url('guru/home'));
            } else {
                session()->setFlashdata('error1', 'Password Salah');
                return redirect()->to(base_url('login'));
            }
        } else {
            session()->setFlashdata('error2', 'Akun Tidak Ditemukan');
            return redirect()->to(base_url('login'));
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }
}