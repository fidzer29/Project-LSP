<?php

namespace App\Controllers;

use Codeigniter\Controller;
use App\Models\OrderModel;
use App\Models\AlatModel;
use phpDocumentor\Reflection\Types\Null_;

class order extends BaseController
{

    public function ordering()
    {
        //validasi
        if (!$this->validate([
            'Nama_Pelanggan' => [
                'rules'  => 'required|alpha_space',
                'errors' => [
                    'required'    => 'Nama harus di isi !!!',
                    'alpha_space' => 'Inputan tidak boleh berupa angka !!!'
                ]
            ],
            'Alamat' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Alamat harus di isi !!!'
                ]
            ],
            'No_Hp' => [
                'rules'  => 'required|Is_unique[t_order.No_Hp]',
                'errors' => [
                    'required'    => 'No.HP harus di isi !!!',
                ]
            ],
            'Tgl_Muncak' => [
                'rules'  => 'required|Is_unique[t_order.Tgl_Muncak]',
                'errors' => [
                    'required'    => 'Tanggal Muncak harus di isi !!!',
                ]
            ],
            'Jumlah_Tiket' => [
                'rules'  => 'required|Is_unique[t_order.Jumlah_Tiket]',
                'errors' => [
                    'required'    => 'Jumlah Tiket harus di isi !!!',
                ]
            ],


        ])) {
            $validasi = \Config\Services::validation();
            return redirect()->to('/user')->withInput()->with('validate', $validasi);
        }

        $data = array(
            'Nama_Pelanggan'      => $this->request->getPost('Nama_Pelanggan'),
            'Alamat'  => $this->request->getPost('Alamat'),
            'No_Hp'     => $this->request->getPost('No_Hp'),
            'Nama_Gunung'     => $this->request->getPost('Nama_Gunung'),
            'Tgl_Muncak'     => $this->request->getPost('Tgl_Muncak'),
            'Jumlah_Tiket'     => $this->request->getPost('Jumlah_Tiket'),

        );
        $model = new OrderModel();
        $model->insert($data);
        session()->setFlashdata('success', 'Jadwal Anda berhasil terdaftar !!!');
        return redirect()->to('/user');
    }






    public function alathiking()
    {
        //validasi
        if (!$this->validate([
            'Nama_Pelanggan' => [
                'rules'  => 'required|alpha_space',
                'errors' => [
                    'required'    => 'Nama harus di isi !!!',
                    'alpha_space' => 'Inputan tidak boleh berupa angka !!!'
                ]
            ],
            'Alamat' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Alamat harus di isi !!!'
                ]
            ],
            'No_Hp' => [
                'rules'  => 'required|Is_unique[t_alat.No_Hp]',
                'errors' => [
                    'required'    => 'No.HP harus di isi !!!',
                ]
            ],
            'Jumlah_Barang' => [
                'rules'  => 'required|Is_unique[t_alat.Jumlah_Barang]',
                'errors' => [
                    'required'    => 'Jumlah Pembelian harus di isi !!!',
                ]
            ],


        ])) {
            $validasi = \Config\Services::validation();
            return redirect()->to('/user')->withInput()->with('validate', $validasi);
        }

        $data = array(
            'Nama_Pelanggan'      => $this->request->getPost('Nama_Pelanggan'),
            'Alamat'  => $this->request->getPost('Alamat'),
            'No_Hp'     => $this->request->getPost('No_Hp'),
            'Nama_Barang'     => $this->request->getPost('Nama_Barang'),
            'Jumlah_Barang'     => $this->request->getPost('Jumlah_Barang'),

        );
        $model = new AlatModel();
        $model->insert($data);
        session()->setFlashdata('success', 'Jadwal Anda berhasil terdaftar !!!');
        return redirect()->to('/user');
    }


    //--------------------------------------------------------------------

}
