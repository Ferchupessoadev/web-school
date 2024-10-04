<?php

namespace App\Controllers;

class dashboardController extends Controller
{
    public function index(): string
    {
        if (!$_SESSION) {
            return $this->redirect('/login');
        }
        return $this->view('dashboard');
    }
}
