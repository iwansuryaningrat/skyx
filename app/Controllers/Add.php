<?php

namespace App\Controllers;

use App\Models\DatausersModel;
use App\Models\TeamsModel;
use App\Models\VisitorsModel;

class Add extends BaseController
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
            $image->move('foto/', $namaImage);
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
}
