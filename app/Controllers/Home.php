<?php

namespace App\Controllers;

use App\Models\DatausersModel;
use App\Models\TeamsModel;
use App\Models\VisitorsModel;
use App\Models\ArtikelModel;
use App\Models\ProjectsModel;
use App\Models\PartnershipModel;

use CodeIgniter\I18n\Time;

class Home extends BaseController
{
    protected $dataModel;
    protected $teamsModel;
    protected $visitorsModel;
    protected $artikelModel;
    protected $partnershipModel;

    public function __construct()
    {
        $this->dataModel = new DatausersModel();
        $this->teamsModel = new TeamsModel();
        $this->visitorsModel = new VisitorsModel();
        $this->artikelModel = new ArtikelModel();
        $this->projectsModel = new ProjectsModel();
        $this->partnershipModel = new PartnershipModel();
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

        $data = [
            'title' => 'Skyx - START!'
        ];

        return view('mainpage/index', $data);
    }

    public function home()
    {
        $artikel = $this->artikelModel->findAll();
        $projects = $this->projectsModel->findAll();

        $data = [
            'title' => 'Skyx - One Stop Solutions For Blockchain Projects Investments',
            'tab' => 'home',
            'artikel' => $artikel,
            'projects' => $projects
        ];

        return view('mainpage/home', $data);
    }

    public function faq()
    {
        $data = [
            'title' => 'FAQs | Skyx - One Stop Solutions For Blockchain Projects Investments',
            'tab' => 'faq'
        ];

        return view('mainpage/faq', $data);
    }

    public function about()
    {
        $teams = $this->teamsModel->findAll();
        $sum = $this->teamsModel->getSum();
        // dd($sum);
        // dd($teams);
        $data = [
            'title' => 'About Us - Skyx',
            'tab' => 'about',
            'teams' => $teams,
            'sum' => $sum
        ];

        return view('mainpage/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us - Skyx',
            'tab' => 'contact'
        ];

        return view('mainpage/contact', $data);
    }

    public function projects()
    {
        $data = [
            'title' => 'Projects - Skyx',
            'tab' => 'projects'
        ];

        return view('mainpage/projects', $data);
    }
}
