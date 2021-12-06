<?php

namespace App\Controllers;

use App\Models\DatausersModel;
use App\Models\TeamsModel;
use App\Models\VisitorsModel;
use App\Models\ArtikelModel;
use App\Models\ProjectsModel;
use App\Models\PartnershipModel;
use App\Models\PortfolioModel;

use CodeIgniter\I18n\Time;

class Add extends BaseController
{
    protected $dataModel;
    protected $teamsModel;
    protected $visitorsModel;
    protected $artikelModel;
    protected $partnershipModel;
    protected $portfolioModel;

    public function __construct()
    {
        $this->dataModel = new DatausersModel();
        $this->teamsModel = new TeamsModel();
        $this->visitorsModel = new VisitorsModel();
        $this->artikelModel = new ArtikelModel();
        $this->projectsModel = new ProjectsModel();
        $this->partnershipModel = new PartnershipModel();
        $this->portfolioModel = new PortfolioModel();
    }

    public function addTeamForm()
    {
        $data = [
            'title' => 'Form Add Team | SKYX',
            'tab' => 'teams'
        ];

        return view('admin/formaddteams', $data);
    }

    public function addTeam()
    {
        $image = $this->request->getFile('foto');
        if ($image->getError() == 4) {
            $namaImage = 'default.jpg';
        } else {
            $namaImage = $image->getRandomName();
            $image->move('foto/teams/', $namaImage);
        }

        $this->teamsModel->insert([
            'nama' => $this->request->getVar('name'),
            'jabatan' => $this->request->getVar('jabatan'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'ig' => $this->request->getVar('instagram'),
            'linkedin' => $this->request->getVar('linkedin'),
            'foto' => $namaImage
        ]);

        return redirect()->to('/admin/teams');
    }

    public function addPartnerForm()
    {
        $data = [
            'title' => 'Form Add Partner | SKYX',
            'tab' => 'partnership'
        ];

        return view('admin/formaddpartners', $data);
    }

    public function addPartner()
    {
        $image = $this->request->getFile('foto');
        if ($image->getError() == 4) {
            $namaImage = 'default.jpg';
        } else {
            $namaImage = $image->getRandomName();
            $image->move('foto/partnership', $namaImage);
        }

        $this->partnershipModel->insert([
            'nama' => $this->request->getVar('name'),
            'link' => $this->request->getVar('link'),
            'logo' => $namaImage
        ]);

        return redirect()->to('/admin/partnership');
    }

    public function addProjectsForm()
    {
        $data = [
            'title' => 'Form Add Projects | SKYX',
            'tab' => 'projects'
        ];

        return view('admin/formaddprojects', $data);
    }

    public function addProjects()
    {
        $image = $this->request->getFile('foto');
        if ($image->getError() == 4) {
            $namaImage = 'default.jpg';
        } else {
            $namaImage = $image->getRandomName();
            $image->move('foto/projects', $namaImage);
        }

        $startDate = Time::parse($this->request->getVar('startdate'));
        $startDate = $startDate->toDateString();
        $endDate = Time::parse($this->request->getVar('enddate'));
        $endDate = $endDate->toDateString();
        // dd($startDate);

        $data = [
            'nama' => $this->request->getVar('name'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'start_date' => $startDate,
            'end_date' => $endDate,
            'price' => $this->request->getVar('price'),
            'satuan' => $this->request->getVar('satuan'),
            'total_bon' => $this->request->getVar('totalbon'),
            'foto' => $namaImage
        ];
        // dd($data);

        $this->projectsModel->insert($data);

        return redirect()->to('/admin/projects');
    }

    public function addArtikelForm()
    {
        $data = [
            'title' => 'Form Add Artikel | SKYX',
            'tab' => 'artikel'
        ];

        return view('admin/formaddartikel', $data);
    }

    public function addArtikel()
    {
        // $image = $this->request->getFile('foto');
        // if ($image->getError() == 4) {
        //     $namaImage = 'default.jpg';
        // } else {
        //     $namaImage = $image->getRandomName();
        //     $image->move('foto/', $namaImage);
        // }

        // $this->teamsModel->insert([
        //     'nama' => $this->request->getVar('name'),
        //     'jabatan' => $this->request->getVar('jabatan'),
        //     'deskripsi' => $this->request->getVar('deskripsi'),
        //     'ig' => $this->request->getVar('instagram'),
        //     'linkedin' => $this->request->getVar('linkedin'),
        //     'foto' => $namaImage
        // ]);
        $data = [
            'judul' => $this->request->getVar('judul'),
            'preview' => $this->request->getVar('preview'),
            'isi' => $this->request->getVar('summernote')
        ];
        dd($data);

        return redirect()->to('/admin/teams');
    }

    public function users()
    {
        $email = $this->request->getVar('email');
        $phone = $this->request->getVar('phoneNumber');
        $user = $this->dataModel->getUser($email, $phone);
        // dd($user);

        // Validasi
        if ($user != null) {
            echo "data sudah ada";
        } else {
            $data = [
                'first_name' => $this->request->getVar('firstName'),
                'last_name' => $this->request->getVar('lastName'),
                'username' => $this->request->getVar('userName'),
                'email' => $email,
                'phone' => $phone
            ];

            $this->dataModel->insert($data);

            return redirect()->to('/home/contact');
        }
    }
}
