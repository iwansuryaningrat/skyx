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

class Edit extends BaseController
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

    public function editTeamForm($id)
    {
        $dataTeam = $this->teamsModel->getTeamData($id);
        // dd($dataTeam);

        $data = [
            'title' => 'Edit Team Data | SKYX',
            'tab' => 'teams',
            'datateam' => $dataTeam
        ];

        return view('admin/formeditteam', $data);
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

        return view('admin/formeditpartner', $data);
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
}
