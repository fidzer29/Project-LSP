<?php

namespace App\Controllers;

use Codeigniter\Controller;
use App\Models\UsersModel;
use App\Models\AuthModel;
use phpDocumentor\Reflection\Types\Null_;

class Auth extends BaseController
{

    public function v_login()
    {
        $data = [
            'title' => 'Login'
        ];
        return view('izma/login', $data);
    }

    public function v_register()
    {
        $data = [
            'title' => 'Register',
            'validate' => \Config\Services::validation()
        ];
        return view('izma/register', $data);
    }

    public function register()
    {
        //validasi
        if (!$this->validate([
            'Nama_Pelanggan' => [
                'rules'  => 'required|alpha_space',
                'errors' => [
                    'required'    => 'Nama harus di isi !!!',
                    'Is_unique'   => 'Nama sudah terdaftar di user lain !!!',
                    'alpha_space' => 'Inputan tidak boleh berupa angka !!!'
                ]
            ],
            'Email' => [
                'rules'  => 'required|Is_unique[t_user.Email]',
                'errors' => [
                    'required'    => 'Email harus di isi !!!',
                    'Is_unique'   => 'Email sudah terdaftar di user lain !!!',
                    'Is_unique'   => 'Email anda sudah terdaftar !!!',
                ]
            ],
            'Password' => [
                'rules'  => 'required|Is_unique[t_user.Password]|min_length[8]',
                'errors' => [
                    'required'    => 'Password harus di isi !!!',
                    'min_length'  => 'Inputan Password minimal 8 !!!'
                ]
            ],
            'Alamat_Pelanggan' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Alamat Pelanggan harus di isi !!!'
                ]
            ],
            'No_Hp' => [
                'rules'  => 'required|Is_unique[t_user.No_Hp]',
                'errors' => [
                    'required'    => 'No.HP harus di isi !!!',
                    'Is_unique'   => 'No.HP anda sudah terdaftar !!!',
                ]
            ],
        ])) {
            $validasi = \Config\Services::validation();
            return redirect()->to('/registrasi')->withInput()->with('validate', $validasi);
        }

        $data = array(
            'Nama_Pelanggan'      => $this->request->getPost('Nama_Pelanggan'),
            'Email'  => $this->request->getPost('Email'),
            'Password'  => password_hash($this->request->getPost('Password'), PASSWORD_DEFAULT),
            'Alamat_Pelanggan'     => $this->request->getPost('Alamat_Pelanggan'),
            'No_Hp'     => $this->request->getPost('No_Hp'),
            'Level'     => $this->request->getPost('Level'),

        );
        $model = new UsersModel();
        $model->insert($data);
        session()->setFlashdata('success', 'Anda berhasil registrasi akun !!!');
        return redirect()->to('/login');
    }

    public function login()
    {
        $model = new AuthModel;
        $table = 't_user';
        $Email = $this->request->getPost('Email');
        $Password = $this->request->getPost('Password');
        $row      = $model->get_data_login($Email, $table);
        if ($row == Null) {
            session()->setFlashdata('warning', 'Username atau Password tidak terisi !!!');
            return redirect()->to('/login');
        }
        if (password_verify($Password, $row->Password)) {
            $data = array(
                'login'    => TRUE,
                'Nama_Pelanggan'     => $row->Nama_Pelanggan,
                'Email'              => $row->Email,
            );
            session()->set($data);
            session()->setFlashdata('success', 'Berhasil login !!!');
            return redirect()->to('/user');
        }
        session()->setFlashdata('warning', 'Username atau Password salah !!!');
        return redirect()->to('/login');
    }

    public function logout()
    {
        session()->remove('login');
        session()->remove('Username');
        session()->remove('Password');
        session()->remove('Foto');
        session()->setFlashdata('success', 'Anda berhasil logout !!!');
        return redirect()->to('/login');
    }
}
