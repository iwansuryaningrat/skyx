<?php

namespace App\Controllers;

use App\Models\DatausersModel;
use App\Models\TeamsModel;
use App\Models\VisitorsModel;

class Admin extends BaseController
{
    protected $dataModel;
    protected $teamsModel;
    protected $visitorsModel;

    public function __construct()
    {
        $this->dataModel = new DatausersModel();
        $this->teamsModel = new TeamsModel();
        $this->visitorsModel = new VisitorsModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard Admin | SKYX',
            'tab' => 'dashboard'
        ];

        return view('admin/index', $data);
    }

    public function projects()
    {
        $data = [
            'title' => 'Projects | SKYX',
            'tab' => 'projects'
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
        dd($datausers);
        $data = [
            'title' => 'Data Users | SKYX',
            'tab' => 'users',
            'users' => $datausers
        ];

        return view('admin/datausers', $data);
    }
    
    public function teams()
    {
        $data = [
            'title' => 'Data Teams | SKYX',
            'tab' => 'teams'
        ];

        return view('admin/teams', $data);
    }
}
