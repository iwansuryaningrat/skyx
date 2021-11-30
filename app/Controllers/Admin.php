<?php

namespace App\Controllers;

use App\Models\DatausersModel;
use App\Models\TeamsModel;
use App\Models\VisitorsModel;
use App\Models\ArtikelModel;
use App\Models\ProjectsModel;
use App\Models\PartnershipModel;

use CodeIgniter\I18n\Time;

class Admin extends BaseController
{
    protected $dataModel;
    protected $teamsModel;
    protected $visitorsModel;
    protected $artikelModel;
    protected $projectsModel;
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
        // Mengambil data bulanan
        $databulan = $this->dataModel->getBulanan();
        // dd($databulan);

        // Mengambil jumlah subscribers
        $jumlah = $this->dataModel->getSum();

        // Mengambil Kumulatif Bulanan
        $databulanankumilatif = $this->dataModel->getBulananKumulatif();

        // Mengambil data new subscribers (subscribers bulan ini)
        $newSubscribers = $this->dataModel->getNewSubscribers();

        // Mengambil jumlah visitors hari ini
        $visitors = $this->visitorsModel->getTodayVisitors();

        // Mengambil data visitors bulanan
        $visitorsMonthly = $this->visitorsModel->getBulanan();

        // Mengambil data visitors bulanan
        $visitorsKumulatif = $this->visitorsModel->getBulananKumulatif();

        $data = [
            'title' => 'Dashboard Admin | SKYX',
            'tab' => 'dashboard',
            'databulan' => $databulan,
            'jumlah' => $jumlah,
            'kumulatif' => $databulanankumilatif,
            'newSubscribers' => $newSubscribers,
            'visitors' => $visitors,
            'visitorsMonthly' => $visitorsMonthly,
            'visitorsKumulatif' => $visitorsKumulatif
        ];

        return view('admin/index', $data);
    }

    public function projects()
    {
        $dataProjects = $this->projectsModel->findAll();
        // dd($dataProjects);

        $data = [
            'title' => 'Projects | SKYX',
            'tab' => 'projects',
            'dataprojects' => $dataProjects
        ];

        return view('admin/projects', $data);
    }

    public function faqs()
    {
        $data = [
            'title' => 'FAQs | SKYX',
            'tab' => 'faqs'
        ];

        return view('admin/faqs', $data);
    }

    public function users()
    {
        $datausers = $this->dataModel->findAll();

        $data = [
            'title' => 'Data Users | SKYX',
            'tab' => 'users',
            'users' => $datausers
        ];

        return view('admin/datausers', $data);
    }

    public function teams()
    {
        $teams = $this->teamsModel->findAll();
        $data = [
            'title' => 'Data Teams | SKYX',
            'tab' => 'teams',
            'data' => $teams
        ];

        return view('admin/teams', $data);
    }

    public function artikel()
    {
        // $artikel = $this->artikelModel->findAll();
        // $data = [
        //     'title' => 'Artikel | SKYX',
        //     'tab' => 'artikel',
        //     'artikel' => $artikel
        // ];
        $data = ['title' => '404 - Not Found'];

        // return view('admin/artikel', $data);
        return view('errors/404', $data);
    }

    public function partnership()
    {
        $dataPartner = $this->partnershipModel->findAll();

        $data = [
            'title' => 'Partnership | Skyx',
            'tab' => 'partnership',
            'data' => $dataPartner
        ];

        return view('admin/partnership', $data);
    }
}
