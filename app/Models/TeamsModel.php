<?php

namespace App\Models;

use CodeIgniter\Model;

class TeamsModel extends Model
{
    protected $table = 'teams';
    protected $primarykey = 'id_team';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'jabatan', 'deskripsi', 'foto', 'ig', 'linkedin', 'created_at', 'updated_at'];

    public function getTeamData($id)
    {
        return $this->where(['id_team' => $id])->first();
    }
}
