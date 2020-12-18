<?php

namespace App\Models;

use CodeIgniter\Model;

class AlatModel extends Model
{
    protected $table         = 't_alat';
    protected $primaryKey    = 'Id_Alat';
    protected $allowedFields = ['Nama_Pelanggan', 'Alamat', 'No_Hp', 'Nama_Barang', 'Jumlah_Barang'];
}
