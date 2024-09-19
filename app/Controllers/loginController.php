<?php

namespace App\Controllers;

class loginController extends Controller
{
	public function index()
	{
		return $this->view('login');
	}
}
