<?php

namespace App\Controllers;

class guru extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'jeroan' => 'guru/index',
        ];
        return view('layout/v_wrapper', $data);
    }

    //--------------------------------------------------------------------

}
