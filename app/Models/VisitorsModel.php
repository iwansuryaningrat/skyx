<?php 

namespace App\Models;

use CodeIgniter\Model;

class VisitorsModel extends Model
{
    protected $table = 'visitors';
    protected $primarykey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['ip', 'date', 'hits', 'online', 'time'];

}
