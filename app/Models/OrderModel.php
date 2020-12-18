<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table         = 't_order';
    protected $primaryKey    = 'Id_Order';
    protected $allowedFields = ['Nama_Pelanggan', 'Alamat', 'No_Hp', 'Nama_Gunung', 'Tgl_Muncak', 'Jumlah_Tiket'];
}
