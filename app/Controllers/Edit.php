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
    }

    public function editTeamForm($id)
    {
        $dataTeam = $this->teamsModel->getTeamData($id);
        // dd($dataTeam);

        $data = [
            'title' => 'Edit Team Data | SKYX',
            'tab' => 'teams',
            'datateam' => $dataTeam
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
        $dataPartner = $this->partnershipModel->getPartnerData($id);
        // dd($dataPartner);

        $data = [
            'title' => 'Edit Partner Data | SKYX',
            'tab' => 'partnership',
            'datapartner' => $dataPartner
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
        $dataPortfolio = $this->portfolioModel->getPortfolioData($id);
        // dd($dataPortfolio);

        $data = [
            'title' => 'Edit Portfolio Data | SKYX',
            'tab' => 'portfolio',
            'dataportfolio' => $dataPortfolio
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
        $dataProject = $this->projectsModel->getProject($id);
        // dd($dataProject);

        $data = [
            'title' => 'Edit Project Data | SKYX',
            'tab' => 'projects',
            'dataproject' => $dataProject
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
}
