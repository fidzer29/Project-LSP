<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table         = 't_user';
    protected $primaryKey    = 'Id_User';
    protected $allowedFields = ['Nama_Pelanggan', 'Password', 'Email', 'Alamat_Pelanggan', 'No_Hp', 'Level'];
}
