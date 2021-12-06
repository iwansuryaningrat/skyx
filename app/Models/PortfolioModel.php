<?php

namespace App\Models;

use CodeIgniter\Model;

class PortfolioModel extends Model
{
    protected $table = 'portfolio';
    protected $primarykey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'link', 'logo', 'created_at', 'updated_at'];

    public function getPortfolioData($id)
    {
        return $this->where(['id' => $id])->first();
    }
}
