<?php

namespace App\Controllers;

use App\Models\DatausersModel;
use App\Models\TeamsModel;
use App\Models\VisitorsModel;
use App\Models\ArtikelModel;
use App\Models\ProjectsModel;
use App\Models\PartnershipModel;
use App\Models\PortfolioModel;
use App\Models\FaqsModel;
use App\Models\TierModel;

use CodeIgniter\I18n\Time;

class Home extends BaseController
{
    protected $dataModel;
    protected $teamsModel;
    protected $visitorsModel;
    protected $artikelModel;
    protected $projectsModel;
    protected $partnershipModel;
    protected $portfolioModel;
    protected $faqsModel;
    protected $tierModel;

    public function __construct()
    {
        $this->dataModel = new DatausersModel();
        $this->teamsModel = new TeamsModel();
        $this->visitorsModel = new VisitorsModel();
        $this->artikelModel = new ArtikelModel();
        $this->projectsModel = new ProjectsModel();
        $this->partnershipModel = new PartnershipModel();
        $this->portfolioModel = new PortfolioModel();
        $this->faqsModel = new FaqsModel();
        $this->tierModel = new TierModel();
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
        $faqs = $this->faqsModel->findAll();
        $data = [
            'title' => 'FAQs | Skyx - One Stop Solutions For Blockchain Projects Investments',
            'tab' => 'faq',
            'faqs' => $faqs
        ];

        return view('mainpage/faq', $data);
    }

    public function about()
    {
        $teams = $this->teamsModel->findAll();
        // dd($sum);
        // dd($teams);
        $data = [
            'title' => 'About Us - Skyx',
            'tab' => 'about',
            'teams' => $teams
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
        $tier = $this->tierModel->orderBy('level', 'ASC')->findAll();

        $data = [
            'title' => 'Projects - Skyx',
            'tab' => 'projects',
            'tier' => $tier
        ];

        return view('mainpage/projects', $data);
    }

    public function portfolio()
    {
        $porto = $this->portfolioModel->findAll();
        // dd($porto);

        $data = [
            'title' => 'Portfolio - Skyx',
            'tab' => 'projects',
            'porto' => $porto
        ];

        return view('mainpage/portfolio', $data);
    }

    public function partnership()
    {
        $partner = $this->partnershipModel->findAll();
        // dd($partner);

        $data = [
            'title' => 'Partnership - Skyx',
            'tab' => 'projects',
            'partner' => $partner
        ];

        return view('mainpage/partner', $data);
    }
}
