<?php

namespace App\Models;

use CodeIgniter\Model;

class FinalModel extends Model
{
    protected $table = 'buku_final';
    protected $primaryKey = 'id_buku';
    protected $allowedFields = ['title', 'author', 'category', 'description', 'year', 'program_studi', 'total_page', 'language', 'cover', 'link_gdrive'];
    public function search($keyword)
    {
        return $this->where('title LIKE', '%' . $keyword . '%')->findAll();
    }
}
