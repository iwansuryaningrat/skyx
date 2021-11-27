<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectsModel extends Model
{
    protected $table = 'projects';
    protected $primarykey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'deskripsi', 'foto', 'start_date', 'end_date', 'created_at', 'updated_at', 'price', 'satuan', 'bon', 'total_bon', 'total_raised'];

    public function getProject($id)
    {
        return $this->where(['id' => $id])->first();
    }
}
