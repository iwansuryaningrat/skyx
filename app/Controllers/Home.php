<?php

namespace App\Controllers;

use App\Models\DatausersModel;
use App\Models\TeamsModel;
use App\Models\VisitorsModel;
use App\Models\ArtikelModel;

use CodeIgniter\I18n\Time;

class Home extends BaseController
{
    protected $dataModel;
    protected $teamsModel;
    protected $visitorsModel;
    protected $artikelModel;

    public function __construct()
    {
        $this->dataModel = new DatausersModel();
        $this->teamsModel = new TeamsModel();
        $this->visitorsModel = new VisitorsModel();
        $this->artikelModel = new ArtikelModel();
    }

    public function index()
    {

        // Akan dipindah ke Home controller
        $ip    = $this->request->getIPAddress(); // Mendapatkan IP user
        $date  = date("Y-m-d"); // Mendapatkan tanggal sekarang
        $timeinsert = date("Y-m-d H:i:s");

        // Cek berdasarkan IP, apakah user sudah pernah mengakses hari ini
        // $ip = '255.255.255.252';
        $s = $this->visitorsModel->getDataIP($ip, $date);
        $ss = isset($s) ? ($s) : 0;
        // d($s);
        // dd($ss);

        // Kalau belum ada, simpan data user tersebut ke database
        if ($ss == null) {
            // dd('Tereksekusi');
            // $this->db->query("INSERT INTO visitor(ip, date, hits, online, time) VALUES('".$ip."','".$date."','1','".$waktu."','".$timeinsert."')");
            $this->visitorsModel->save([
                'ip' => $ip,
                'date' => $date,
                'hits' => 1,
                'online' => $timeinsert,
                'time' => $timeinsert
            ]);
        }

        // Jika sudah ada, update
        else {
            // $this->db->query("UPDATE visitor SET hits=hits+1, online='".$waktu."' WHERE ip='".$ip."' AND date='".$date."'");
            foreach ($s as $row) {
                $data['hits'] = $row['hits'] + 1;

                $this->visitorsModel->update($row['id'], [
                    'id' => $row['id'],
                    'ip' => $ip,
                    'date' => $date,
                    'hits' => $data['hits'],
                    'online' => $timeinsert,
                    'time' => $timeinsert
                ]);
            }
        }

        return view('welcome_message');
    }

    public function home()
    {
        $artikel = $this->artikelModel->findAll();

        $data = [
            'title' => 'Skyx - One Stop Solutions For Blockchain Projects Investments',
            'tab' => 'home',
            'artikel' => $artikel
        ];

        return view('mainpage/home', $data);
    }
}
