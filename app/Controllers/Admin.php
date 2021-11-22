<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard Admin | SKYX',
            'text' => 4,
            'value' => 4
        ];

        return view('admin/index', $data);
    }

    public function projects()
    {
        $data = [
            'title' => 'Projects | SKYX'
        ];

        return view('admin/projects', $data);
    }

    public function faqs()
    {
        $data = [
            'title' => 'FAQs | SKYX'
        ];

        return view('admin/faqs', $data);
    }
}
