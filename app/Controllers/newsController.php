<?php

namespace app\Controllers;

class newsController extends Controller
{
    public function index(): string
    {
        $data = [
            'title' => 'E.E.T N°2 Independencia - Publicaciones',
            'description' => 'Publicaciones'
        ];

        return $this->view('news', $data);
    }

    public function show(int $id): string
    {
		

        return $this->view('news');
    }
}
