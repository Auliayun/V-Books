<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['nama_lengkap', 'username', 'email', 'password', 'level', 'nim', 'program_studi', 'no_hp', 'alamat'];
    public function save_register($data)
    {
        $this->db->table('user')->insert($data);
    }
    public function login($username, $password)
    {
        return $this->db->table('user')->where([
            'username' => $username,
            'password' => $password,
        ])->get()->getRowArray();
    }
    public function search($keyword)
    {
        return $this->where('nama_lengkap LIKE', '%' . $keyword . '%')->findAll();
    }
}
