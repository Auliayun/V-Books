<?php

namespace App\Models;

use CodeIgniter\Model;

class PinjamModel extends Model
{
    protected $table = 'form_pinjam';
    protected $primaryKey = 'id_pinjam';
    protected $allowedFields = ['id_user','title', 'category', 'nama_lengkap', 'nim', 'program_studi', 'tanggal_pinjam', 'tanggal_kembali','status'];

    public function search($keyword)
    {
        return $this->where('title LIKE', '%' . $keyword . '%')->findAll();
    }
}
