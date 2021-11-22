<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard Admin | SKYX'
        ];

        return view('admin/index', $data);
    }
}
