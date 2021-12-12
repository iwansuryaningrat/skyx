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

class Add extends BaseController
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

    public function addTeamForm()
    {
        $data = [
            'title' => 'Form Add Team | SKYX',
            'tab' => 'add teams'
        ];

        return view('admin/addform/formaddteams', $data);
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
            'tab' => 'add partnership'
        ];

        return view('admin/addform/formaddpartners', $data);
    }

    public function addPartner()
    {
        $image = $this->request->getFile('foto');
        if ($image->getError() == 4) {
            $namaImage = 'default.jpg';
        } else {
            $namaImage = $image->getRandomName();
            $image->move('foto/partnership/', $namaImage);
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
            'tab' => 'add projects'
        ];

        return view('admin/addform/formaddprojects', $data);
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
            'tab' => 'add artikel'
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
            session()->setFlashdata('pesan', 'Data sudah ada');
        } else {
            $data = [
                'first_name' => $this->request->getVar('firstName'),
                'last_name' => $this->request->getVar('lastName'),
                'username' => $this->request->getVar('userName'),
                'email' => $email,
                'phone' => $phone
            ];

            $this->dataModel->insert($data);

            session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        }

        return redirect()->to('/home/contact');
    }

    public function addPortfolioForm()
    {
        $data = [
            'title' => 'Form Add Portfolio | SKYX',
            'tab' => 'add portfolio'
        ];

        return view('admin/addform/formaddportfolio', $data);
    }

    public function addPortfolio()
    {
        $image = $this->request->getFile('foto');
        if ($image->getError() == 4) {
            $namaImage = 'default.jpg';
        } else {
            $namaImage = $image->getRandomName();
            $image->move('foto/portfolio/', $namaImage);
        }

        $this->portfolioModel->insert([
            'nama' => $this->request->getVar('name'),
            'link' => $this->request->getVar('link'),
            'logo' => $namaImage
        ]);

        return redirect()->to('/admin/portfolio');
    }

    public function addTierForm()
    {
        $data = [
            'title' => 'Form Add Tier | SKYX',
            'tab' => 'add projects'
        ];

        return view('admin/addform/formaddtier', $data);
    }

    public function addTier()
    {
        $data = [
            'level' => $this->request->getVar('level'),
            'pool' => $this->request->getVar('pool'),
            'jumlah' => $this->request->getVar('jumlah')
        ];

        $this->tierModel->insert($data);

        return redirect()->to('/admin/tier');
    }

    public function addFaqsForm()
    {
        $data = [
            'title' => 'Form Add FAQ | SKYX',
            'tab' => 'faqs'
        ];

        return view('admin/addform/formaddfaq', $data);
    }

    public function addFaq()
    {
        $input = $this->request->getPost();
        $jawaban = $input['jawaban'];
        $pertanyaan = $input['pertanyaan'];

        $data = [
            'pertanyaan' => $pertanyaan,
            'jawaban' => $jawaban
        ];

        $this->faqsModel->insert($data);

        return redirect()->to('/admin/faqs');
    }
}
