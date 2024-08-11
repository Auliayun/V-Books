<?php

namespace App\Models;

use CodeIgniter\Model;

class SaveGeneralModel extends Model
{
    protected $table = 'savebook_general';
    protected $primaryKey = 'id_saved';
    protected $allowedFields = ['id_user', 'id_buku'];

    public function search($keyword)
    {
        return $this->where('title LIKE', '%' . $keyword . '%')->findAll();
    }

    public function getSavedBooksByUser($userId)
    {
        
    return $this->select('buku_general.*')
                ->join('buku_general', 'buku_general.id_buku = savebook_general.id_buku')
                ->where('savebook_general.id_user', $userId)
                ->findAll();
    }
    
}

