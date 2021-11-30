<?php

namespace App\Models;

use CodeIgniter\Model;

class PartnershipModel extends Model
{
    protected $table = 'partnership';
    protected $primarykey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'link', 'foto', 'created_at', 'updated_at'];

    public function getPartnerData($id)
    {
        return $this->where(['id' => $id])->first();
    }
}
