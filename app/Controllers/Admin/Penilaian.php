<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\ModelUser;
use App\Models\PenilaianModel;

class Penilaian extends BaseController
{

    public function __construct()
    {
        $this->nilai = new PenilaianModel();
        $this->user = new ModelUser();
        $this->admin = new AdminModel();
    }

    public function index()
    {
        $id_user = session()->get('id_user');
        $data = [
            'title'     => 'Data Penilaian Guru',
            'sub'       => 'Halaman Penilaian Guru',
            'nilai' => $this->nilai->findAll(),
            'admin'         => $this->admin->getAdmin($id_user)
        ];

        return view('admin/penilaian', $data);
    }

    public function addnilai()
    {
        $id_user = session()->get('id_user');
        $data = [
            'title'     => 'Tambah Nilai',
            'sub'       => 'Halaman Penilaian',
            'validation' => \Config\Services::validation(),
            'user'     => $this->user->findAll(),
            'admin'         => $this->admin->getAdmin($id_user)
        ];

        return view('admin/addPenilaian', $data);
    }

    public function insert()
    {
        $data = [
            'nama'      => $this->request->getPost('nama'),
            'kelas'     => $this->request->getPost('kelas'),
            'k1'        => $this->request->getPost('1'),
            'k2'        => $this->request->getPost('2'),
            'k3'        => $this->request->getPost('3'),
            'k4'        => $this->request->getPost('4'),
            'k5'        => $this->request->getPost('5'),
            'k6'        => $this->request->getPost('6'),
            'k7'        => $this->request->getPost('7'),
            'k8'        => $this->request->getPost('8'),
            'k9'        => $this->request->getPost('9'),
            'k10'        => $this->request->getPost('10'),
            'k11'        => $this->request->getPost('11'),
            'k12'        => $this->request->getPost('12'),
            'k13'        => $this->request->getPost('13'),
            'k14'        => $this->request->getPost('14'),
            'k15'        => $this->request->getPost('15'),
            'k16'        => $this->request->getPost('16'),
            'k17'        => $this->request->getPost('17'),
            'k18'        => $this->request->getPost('18'),
            'k19'        => $this->request->getPost('19'),
            'k20'        => $this->request->getPost('20'),
            'k21'        => $this->request->getPost('21'),
            'k22'        => $this->request->getPost('22'),
            'k23'        => $this->request->getPost('23'),
            'k24'        => $this->request->getPost('24'),
            'k25'        => $this->request->getPost('25'),
            'k26'        => $this->request->getPost('26'),
            'k27'        => $this->request->getPost('27'),
            'k28'        => $this->request->getPost('28'),
            'k29'        => $this->request->getPost('29'),
            'k30'        => $this->request->getPost('30'),
            'k31'        => $this->request->getPost('31'),
            'k32'        => $this->request->getPost('32'),
            'k33'        => $this->request->getPost('33'),
            'k34'        => $this->request->getPost('34'),
            'k35'        => $this->request->getPost('35'),
            'k36'        => $this->request->getPost('36'),
            'k37'        => $this->request->getPost('37'),
            'k38'        => $this->request->getPost('38'),
            'k39'        => $this->request->getPost('39'),
            'k40'        => $this->request->getPost('40'),
        ];
        $this->nilai->insert($data);
        session()->setFlashdata('success', 'Data Berhasil Di Tambahkan');
        return redirect()->to('admin/penilaian');
    }

    public function edit($id_nilai2)
    {
        $id_user = session()->get('id_user');
        $data = [
            'title'     => 'Update Data Nilai',
            'sub'       => 'Halaman Penilaian',
            'validation' => \Config\Services::validation(),
            'user'     => $this->user->findAll(),
            'nilai'     => $this->nilai->get($id_nilai2),
            'admin'         => $this->admin->getAdmin($id_user)
        ];

        return view('admin/editnilai', $data);
    }

    public function update()
    {
        $id_nilai2 = $this->request->getPost('id_nilai');
        $this->nilai->update($id_nilai2, [
            'kelas'     => $this->request->getPost('kelas'),
            'k1'        => $this->request->getPost('1'),
            'k2'        => $this->request->getPost('2'),
            'k3'        => $this->request->getPost('3'),
            'k4'        => $this->request->getPost('4'),
            'k5'        => $this->request->getPost('5'),
            'k6'        => $this->request->getPost('6'),
            'k7'        => $this->request->getPost('7'),
            'k8'        => $this->request->getPost('8'),
            'k9'        => $this->request->getPost('9'),
            'k10'        => $this->request->getPost('10'),
            'k11'        => $this->request->getPost('11'),
            'k12'        => $this->request->getPost('12'),
            'k13'        => $this->request->getPost('13'),
            'k14'        => $this->request->getPost('14'),
            'k15'        => $this->request->getPost('15'),
            'k16'        => $this->request->getPost('16'),
            'k17'        => $this->request->getPost('17'),
            'k18'        => $this->request->getPost('18'),
            'k19'        => $this->request->getPost('19'),
            'k20'        => $this->request->getPost('20'),
            'k21'        => $this->request->getPost('21'),
            'k22'        => $this->request->getPost('22'),
            'k23'        => $this->request->getPost('23'),
            'k24'        => $this->request->getPost('24'),
            'k25'        => $this->request->getPost('25'),
            'k26'        => $this->request->getPost('26'),
            'k27'        => $this->request->getPost('27'),
            'k28'        => $this->request->getPost('28'),
            'k29'        => $this->request->getPost('29'),
            'k30'        => $this->request->getPost('30'),
            'k31'        => $this->request->getPost('31'),
            'k32'        => $this->request->getPost('32'),
            'k33'        => $this->request->getPost('33'),
            'k34'        => $this->request->getPost('34'),
            'k35'        => $this->request->getPost('35'),
            'k36'        => $this->request->getPost('36'),
            'k37'        => $this->request->getPost('37'),
            'k38'        => $this->request->getPost('38'),
            'k39'        => $this->request->getPost('39'),
            'k40'        => $this->request->getPost('40')
        ]);
        session()->setFlashdata('success', 'Data Berhasil Di Update');
        return redirect()->to('admin/penilaian');
    }

    public function hapus($id_nilai2)
    {
        $nilai = $this->nilai->find($id_nilai2);

        if (isset($nilai)) {
            $this->nilai->delete($id_nilai2);
            session()->setFlashdata('success', 'Data Berhasil Dihapus');
            return redirect()->to('admin/penilaian');
        }
    }

    public function detail($id_nilai2)
    {
        $id_user = session()->get('id_user');
        $data = [
            'title'     => 'Detail Nilai Guru',
            'sub'       => 'Halaman Penilaian',
            'nilai'     => $this->nilai->get($id_nilai2),
            'admin'         => $this->admin->getAdmin($id_user)
        ];

        return view('admin/detailNilai', $data);
    }
}