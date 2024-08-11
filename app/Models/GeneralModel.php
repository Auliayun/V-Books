<?php

namespace App\Models;

use CodeIgniter\Model;

class GeneralModel extends Model
{
    protected $table = 'buku_general';
    protected $primaryKey = 'id_buku';
    protected $allowedFields = ['title', 'author', 'category', 'description', 'year', 'total_page', 'language', 'cover', 'link_gdrive'];

    public function search($keyword)
    {
        return $this->where('title LIKE', '%' . $keyword . '%')->findAll();
    }
}
