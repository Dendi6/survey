<?php

namespace App\Controllers;

use App\Models\SurveyModel;

class Riwayat extends BaseController
{
    protected $surveyModel;
    public function __construct()
    {
        $this->surveyModel = new SurveyModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Riwayat Survey',
            'riwayat' => $this->surveyModel->findAll()
        ];

        return view('riwayat/index', $data);
    }
}
