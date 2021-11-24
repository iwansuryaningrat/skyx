<?php 

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\I18n\Time;
class DatausersModel extends Model
{
    protected $table = 'datausers';
    protected $primarykey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['first_name', 'last_name', 'username', 'email', 'phone', 'created_at', 'updated_at'];

    public function getBulanan()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('datausers');
        $query   = $builder->get();
        $result  = $query->getResultArray(); 
        
        $datausers = $result;
        // Menghitung jumlah subscribers perbulan
        $databulan = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        foreach($datausers as $users) 
        {
            $time = Time::parse($users['created_at']);
            $month = $time->getMonth();
            if ($month == '1')
            {
                $databulan[2] += 1;
            } else if ($month == '2')
            {
                $databulan[3] += 1;
            } else if ($month == '3')
            {
                $databulan[4] += 1;
            } else if ($month == '4')
            {
                $databulan[5] += 1;                
            } else if ($month == '5')
            {
                $databulan[6] += 1;
            } else if ($month == '6')
            {
                $databulan[7] += 1;
            } else if ($month == '7')
            {
                $databulan[8] += 1;
            } else if ($month == '8')
            {
                $databulan[9] += 1;
            } else if ($month == '9')
            {
                $databulan[10] += 1;
            } else if ($month == '10')
            {
                $databulan[11] += 1;
            } else if ($month == '11')
            {
                $databulan[0] += 1;
            } else if ($month == '12')
            {
                $databulan[1] += 1;
            } 
        }

        return $databulan;
    }

    public function getSum()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('datausers');
        $query   = $builder->countAllResults();
        // $result  = $query->getResultArray();        

        return $query;
    }

    public function getBulananKumulatif()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('datausers');
        $query   = $builder->get();
        $result  = $query->getResultArray();
        $datausers = $result;

        $databulan = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $databulankumilatif = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

        foreach($datausers as $users) 
        {
            $time = Time::parse($users['created_at']);
            $month = $time->getMonth();
            if ($month == '1')
            {
                $databulan[2] += 1;
            } else if ($month == '2')
            {
                $databulan[3] += 1;
            } else if ($month == '3')
            {
                $databulan[4] += 1;
            } else if ($month == '4')
            {
                $databulan[5] += 1;                
            } else if ($month == '5')
            {
                $databulan[6] += 1;
            } else if ($month == '6')
            {
                $databulan[7] += 1;
            } else if ($month == '7')
            {
                $databulan[8] += 1;
            } else if ($month == '8')
            {
                $databulan[9] += 1;
            } else if ($month == '9')
            {
                $databulan[10] += 1;
            } else if ($month == '10')
            {
                $databulan[11] += 1;
            } else if ($month == '11')
            {
                $databulan[0] += 1;
            } else if ($month == '12')
            {
                $databulan[1] += 1;
            } 
        }

        for ($i=0; $i < 12; $i++) { 
            for ($j=0; $j <= $i; $j++) { 
                $databulankumilatif[$i] += $databulan[$j]; 
            }
        }

        return $databulankumilatif;
    }

    public function getNewSubscribers()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('datausers');
        $query   = $builder->get();
        $result  = $query->getResultArray();
        $datausers = $result;

        $today = Time::today('Asia/Jakarta', 'en_US');
        $time = Time::parse($today);
        $thisMonth = $time->getMonth();
        $data = 0;
        foreach($datausers as $users) 
        {
            $time = Time::parse($users['created_at']);
            $month = $time->getMonth();
            if ($month == $thisMonth)
            {
                $data += 1;
            }
        }

        return $data;
    }
}
