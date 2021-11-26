<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\BaseResult;

class ArtikelModel extends Model
{
    protected $table = 'artikel';
    protected $primarykey = 'id_artikel';
    protected $useTimestamps = true;
    protected $allowedFields = ['judul', 'preview', 'isi', 'created_at', 'updated_at'];

    public function getArtikel($id)
    {
        return $this->where(['id_artikel' => $id])->first();
    }
}
