<?php

namespace App\Controllers;

use App\Models\DatausersModel;
use App\Models\TeamsModel;
use App\Models\VisitorsModel;

class Edit extends BaseController
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
            $image->move('foto/', $namaImage);
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
}
