<?php

namespace App\Models;

use CodeIgniter\Model;

class TierModel extends Model
{
    protected $table            = 'tiers';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = [
        'level',
        'pool',
        'jumlah',
        'created_at',
        'updated_at'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
