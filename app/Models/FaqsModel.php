<?php

namespace App\Models;

use CodeIgniter\Model;

class FaqsModel extends Model
{
    protected $table            = 'faqs';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'pertanyaan',
        'jawaban',
        'created_at',
        'updated_at'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getFaq($id)
    {
        return $this->where(['id' => $id])->first();
    }
}
