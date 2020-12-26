<?php

namespace App\Controllers;

class Detail extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Detail'
        ];

        return view('detail/index', $data);
    }
}
