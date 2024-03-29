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

class Edit extends BaseController
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

    public function editTeamForm($id)
    {
        // Menampilkan Jumlah User Baru Yang Belum di lihat
        $users = $this->dataModel->findAll();

        $jumlahusers = 0;
        foreach ($users as $users) {
            if ($users['status'] == 'Unread') {
                $jumlahusers++;
            }
        }

        $dataTeam = $this->teamsModel->getTeamData($id);
        // dd($dataTeam);

        $data = [
            'title' => 'Edit Team Data | SKYX',
            'tab' => 'teams',
            'datateam' => $dataTeam,
            'jumlahusers' => $jumlahusers
        ];

        return view('admin/editform/formeditteam', $data);
    }

    public function editTeam($id)
    {
        $dataTeam = $this->teamsModel->getTeamData($id);

        $deskripsi = $this->request->getVar('deskripsi');

        if ($deskripsi == '') {
            $deskripsi = $dataTeam['deskripsi'];
        }

        $image = $this->request->getFile('foto');
        if ($image->getError() == 4) {
            $namaImage = $dataTeam['foto'];
        } else {
            $namaImage = $image->getRandomName();
            $image->move('foto/teams/', $namaImage);
        }
        // dd($namaImage);

        $data = [
            'id' => $id,
            'nama' => $this->request->getVar('name'),
            'jabatan' => $this->request->getVar('jabatan'),
            'deskripsi' => $deskripsi,
            'ig' => $this->request->getVar('instagram'),
            'linkedin' => $this->request->getVar('linkedin'),
            'foto' => $namaImage
        ];

        $this->teamsModel->update($id, $data);

        // dd($data);

        return redirect()->to('/admin/teams');
    }

    public function deleteTeam($id)
    {
        // $id = (int)$id;
        // dd($id);
        $this->teamsModel->delete($id);
        return redirect()->to('/admin/teams');
    }

    public function editPartnerForm($id)
    {
        // Menampilkan Jumlah User Baru Yang Belum di lihat
        $users = $this->dataModel->findAll();

        $jumlahusers = 0;
        foreach ($users as $users) {
            if ($users['status'] == 'Unread') {
                $jumlahusers++;
            }
        }

        $dataPartner = $this->partnershipModel->getPartnerData($id);
        // dd($dataPartner);

        $data = [
            'title' => 'Edit Partner Data | SKYX',
            'tab' => 'partnership',
            'datapartner' => $dataPartner,
            'jumlahusers' => $jumlahusers
        ];

        return view('admin/editform/formeditpartner', $data);
    }

    public function editPartner($id)
    {
        $dataPartner = $this->partnershipModel->getPartnerData($id);

        $image = $this->request->getFile('foto');
        if ($image->getError() == 4) {
            $namaImage = $dataPartner['logo'];
        } else {
            $namaImage = $image->getRandomName();
            $image->move('foto/partnership/', $namaImage);
        }
        // dd($namaImage);

        $data = [
            'id' => $id,
            'nama' => $this->request->getVar('name'),
            'link' => $this->request->getVar('link'),
            'logo' => $namaImage
        ];

        $this->partnershipModel->update($id, $data);

        // dd($data);

        return redirect()->to('/admin/partnership');
    }

    public function deletePartner($id)
    {
        // $id = (int)$id;
        // dd($id);
        $this->partnershipModel->delete($id);
        return redirect()->to('/admin/partnership');
    }

    public function editPortfolioForm($id)
    {
        // Menampilkan Jumlah User Baru Yang Belum di lihat
        $users = $this->dataModel->findAll();

        $jumlahusers = 0;
        foreach ($users as $users) {
            if ($users['status'] == 'Unread') {
                $jumlahusers++;
            }
        }

        $dataPortfolio = $this->portfolioModel->getPortfolioData($id);
        // dd($dataPortfolio);

        $data = [
            'title' => 'Edit Portfolio Data | SKYX',
            'tab' => 'portfolio',
            'dataportfolio' => $dataPortfolio,
            'jumlahusers' => $jumlahusers
        ];

        return view('admin/editform/formeditportfolio', $data);
    }

    public function editPortfolio($id)
    {
        $dataPortfolio = $this->portfolioModel->getPortfolioData($id);

        $image = $this->request->getFile('foto');
        if ($image->getError() == 4) {
            $namaImage = $dataPortfolio['logo'];
        } else {
            $namaImage = $image->getRandomName();
            $image->move('foto/portfolio/', $namaImage);
        }
        // dd($namaImage);

        $data = [
            'id' => $id,
            'nama' => $this->request->getVar('name'),
            'link' => $this->request->getVar('link'),
            'logo' => $namaImage
        ];

        $this->portfolioModel->update($id, $data);

        // dd($data);

        return redirect()->to('/admin/portfolio');
    }

    public function deletePortfolio($id)
    {
        // $id = (int)$id;
        // dd($id);
        $this->portfolioModel->delete($id);
        return redirect()->to('/admin/portfolio');
    }

    public function editProjectForm($id)
    {
        // Menampilkan Jumlah User Baru Yang Belum di lihat
        $users = $this->dataModel->findAll();

        $jumlahusers = 0;
        foreach ($users as $users) {
            if ($users['status'] == 'Unread') {
                $jumlahusers++;
            }
        }

        $dataProject = $this->projectsModel->getProject($id);
        // dd($dataProject);

        $data = [
            'title' => 'Edit Project Data | SKYX',
            'tab' => 'projects',
            'dataproject' => $dataProject,
            'jumlahusers' => $jumlahusers
        ];

        return view('admin/editform/formeditprojects', $data);
    }

    public function editProject($id)
    {
        $dataProject = $this->projectsModel->getProject($id);

        $image = $this->request->getFile('foto');
        if ($image->getError() == 4) {
            $namaImage = $dataProject['foto'];
        } else {
            $namaImage = $image->getRandomName();
            $image->move('foto/projects', $namaImage);
        }

        if ($this->request->getVar('startdate') == null) {
            $startDate = $dataProject['start_date'];
        } else {
            $startDate = Time::parse($this->request->getVar('startdate'));
            $startDate = $startDate->toDateString();
        }

        if ($this->request->getVar('enddate') == null) {
            $endDate = $dataProject['end_date'];
        } else {
            $endDate = Time::parse($this->request->getVar('enddate'));
            $endDate = $endDate->toDateString();
        }
        // dd($startDate);

        $data = [
            'id' => $id,
            'nama' => $this->request->getVar('name'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'start_date' => $startDate,
            'end_date' => $endDate,
            'price' => $this->request->getVar('price'),
            'satuan' => $this->request->getVar('satuan'),
            'total_bon' => $this->request->getVar('totalbon'),
            'foto' => $namaImage
        ];

        $this->projectsModel->update($id, $data);

        // dd($data);

        return redirect()->to('/admin/projects');
    }

    public function deleteProject($id)
    {
        // $id = (int)$id;
        // dd($id);
        $this->projectsModel->delete($id);
        return redirect()->to('/admin/projects');
    }

    public function editTierForm($id)
    {
        // Menampilkan Jumlah User Baru Yang Belum di lihat
        $users = $this->dataModel->findAll();

        $jumlahusers = 0;
        foreach ($users as $users) {
            if ($users['status'] == 'Unread') {
                $jumlahusers++;
            }
        }

        $tier = $this->tierModel->getTier($id);

        $data = [
            'title' => 'Edit Tier Data | SKYX',
            'tab' => 'projects',
            'tier' => $tier,
            'jumlahusers' => $jumlahusers
        ];

        return view('admin/editform/formedittier', $data);
    }

    public function editTier($id)
    {
        $data = [
            'id' => $id,
            'level' => $this->request->getVar('level'),
            'pool' => $this->request->getVar('pool'),
            'jumlah' => $this->request->getVar('jumlah')
        ];

        $this->tierModel->update($id, $data);

        return redirect()->to('/admin/tier');
    }

    public function deleteTier($id)
    {
        $this->tierModel->delete($id);
        return redirect()->to('/admin/tier');
    }

    public function editFaqForm($id)
    {
        // Menampilkan Jumlah User Baru Yang Belum di lihat
        $users = $this->dataModel->findAll();

        $jumlahusers = 0;
        foreach ($users as $users) {
            if ($users['status'] == 'Unread') {
                $jumlahusers++;
            }
        }

        $faq = $this->faqsModel->getFaq($id);

        $data = [
            'title' => 'Edit Faq Data | SKYX',
            'tab' => 'faqs',
            'faq' => $faq,
            'jumlahusers' => $jumlahusers
        ];

        return view('admin/editform/formeditfaq', $data);
    }

    public function editFaq($id)
    {
        $input = $this->request->getPost();
        $jawaban = $input['jawaban'];
        $pertanyaan = $input['pertanyaan'];

        $data = [
            'id' => $id,
            'pertanyaan' => $pertanyaan,
            'jawaban' => $jawaban
        ];

        $this->faqsModel->update($id, $data);

        return redirect()->to('/admin/faqs');
    }

    public function deleteFaq($id)
    {
        $this->faqsModel->delete($id);
        return redirect()->to('/admin/faqs');
    }

    public function updateUser($id)
    {
        $user = $this->dataModel->getUserId($id);

        if ($this->request->getVar('reply') == 'yes') {
            $status = 'Replied';
        } else {
            $status = 'Readed';
        }

        $data = [
            'id' => $id,
            'first_name' => $user['first_name'],
            'last_name' => $user['last_name'],
            'username' => $user['username'],
            'email' => $user['email'],
            'phone' => $user['phone'],
            'tujuan' => $user['tujuan'],
            'project' => $user['project'],
            'chain' => $user['chain'],
            'pitchdeck' => $user['pitchdeck'],
            'whitepaper' => $user['whitepaper'],
            'status' => $status

        ];

        $this->dataModel->update($id, $data);

        return redirect()->to('/admin/users');
    }
}
