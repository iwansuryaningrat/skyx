<?php

namespace App\Models;

use CodeIgniter\Model;

class TeamsModel extends Model
{
    protected $table = 'teams';
    protected $primarykey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'jabatan', 'deskripsi', 'foto', 'ig', 'linkedin', 'created_at', 'updated_at'];

    public function getTeamData($id)
    {
        return $this->where(['id' => $id])->first();
    }

    public function getSum()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('teams');
        $query   = $builder->countAllResults();
        // $result  = $query->getResultArray();        

        return $query;
    }
}
