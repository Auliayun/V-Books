<?php

namespace App\Models;

use CodeIgniter\Model;

class SaveFinalModel extends Model
{
    protected $table = 'savebook_final';
    protected $primaryKey = 'id_saved';
    protected $allowedFields = ['id_user', 'id_buku'];

    public function search($keyword)
    {
        return $this->where('title LIKE', '%' . $keyword . '%')->findAll();
    }

    public function getSavedBooksByUser($userId)
    {
        
    return $this->select('buku_final.*')
                ->join('buku_final', 'buku_final.id_buku = savebook_final.id_buku')
                ->where('savebook_final.id_user', $userId)
                ->findAll();
    
    }
}

