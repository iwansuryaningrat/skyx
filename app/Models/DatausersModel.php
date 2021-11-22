<?php 

namespace App\Models;

use CodeIgniter\Model;

class DatausersModel extends Model
{
    protected $table = 'datausers';
    protected $primarykey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['first_name', 'last_name', 'username', 'email', 'phone', 'created_at', 'updated_at'];

}
