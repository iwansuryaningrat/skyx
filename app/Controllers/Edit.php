<?php

namespace App\Controllers;

class Edit extends BaseController
{
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
        $data = [
            'title' => 'Data Users | SKYX',
            'tab' => 'users'
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
