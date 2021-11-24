<?php 

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\I18n\Time;

class VisitorsModel extends Model
{
    protected $table = 'visitors';
    protected $primarykey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['ip', 'date', 'hits', 'online', 'time'];

    public function getTodayVisitors()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('visitors');
        $query = $builder->get();
        $result  = $query->getResultArray();
        $datavisitors = $result;

        $todayTime = Time::today('Asia/Jakarta', 'en_US');
        $time = Time::parse($todayTime);
        $today = $time->getDay();        
        $sum = 0;
        foreach ($datavisitors as $visitors) 
        {
            $time = Time::parse($visitors['time']);
            $day = $time->getDay();
            if ($day == $today)
            {
                $sum += $visitors['hits'];
            }
        }
      
        return $sum;
    }

    public function getBulanan()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('visitors');
        $query   = $builder->get();
        $result  = $query->getResultArray(); 
        
        $datavisitors = $result;
        $databulan = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        foreach($datavisitors as $visitors) 
        {
            $time = Time::parse($visitors['time']);
            $month = $time->getMonth();
            if ($month == '1')
            {
                $databulan[2] += $visitors['hits'];
            } else if ($month == '2')
            {
                $databulan[3] += $visitors['hits'];
            } else if ($month == '3')
            {
                $databulan[4] += $visitors['hits'];
            } else if ($month == '4')
            {
                $databulan[5] += $visitors['hits'];                
            } else if ($month == '5')
            {
                $databulan[6] += $visitors['hits'];
            } else if ($month == '6')
            {
                $databulan[7] += $visitors['hits'];
            } else if ($month == '7')
            {
                $databulan[8] += $visitors['hits'];
            } else if ($month == '8')
            {
                $databulan[9] += $visitors['hits'];
            } else if ($month == '9')
            {
                $databulan[10] += $visitors['hits'];
            } else if ($month == '10')
            {
                $databulan[11] += $visitors['hits'];
            } else if ($month == '11')
            {
                $databulan[0] += $visitors['hits'];
            } else if ($month == '12')
            {
                $databulan[1] += $visitors['hits'];
            } 
        }

        return $databulan;
    }

    public function getBulananKumulatif()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('visitors');
        $query   = $builder->get();
        $result  = $query->getResultArray(); 
        
        $datavisitors = $result;

        $databulan = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $databulankumilatif = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

        foreach($datavisitors as $visitors) 
        {
            $time = Time::parse($visitors['time']);
            $month = $time->getMonth();
            if ($month == '1')
            {
                $databulan[2] += $visitors['hits'];
            } else if ($month == '2')
            {
                $databulan[3] += $visitors['hits'];
            } else if ($month == '3')
            {
                $databulan[4] += $visitors['hits'];
            } else if ($month == '4')
            {
                $databulan[5] += $visitors['hits'];                
            } else if ($month == '5')
            {
                $databulan[6] += $visitors['hits'];
            } else if ($month == '6')
            {
                $databulan[7] += $visitors['hits'];
            } else if ($month == '7')
            {
                $databulan[8] += $visitors['hits'];
            } else if ($month == '8')
            {
                $databulan[9] += $visitors['hits'];
            } else if ($month == '9')
            {
                $databulan[10] += $visitors['hits'];
            } else if ($month == '10')
            {
                $databulan[11] += $visitors['hits'];
            } else if ($month == '11')
            {
                $databulan[0] += $visitors['hits'];
            } else if ($month == '12')
            {
                $databulan[1] += $visitors['hits'];
            } 
        }

        for ($i=0; $i < 12; $i++) { 
            for ($j=0; $j <= $i; $j++) { 
                $databulankumilatif[$i] += $databulan[$j]; 
            }
        }

        return $databulankumilatif;
    }

}
