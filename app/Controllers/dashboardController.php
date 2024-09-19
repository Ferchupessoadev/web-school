<?php

namespace App\Controllers;

class dashboardController extends Controller
{
    public function index()
    {
        return $this->view('dashboard');
    }
}
