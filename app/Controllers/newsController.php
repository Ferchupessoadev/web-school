<?php

namespace App\Controllers;

use App\Models\NewsModel;

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

    /**
     * Show
     * @param string $title
     * @return string
     */
    public function show(string $title): string
    {
        $newsModel = new NewsModel();
        $data = $newsModel->getNewsByTitle($title);

        if (empty($data)) {
            $data = [
                'title' => 'E.E.T N°2 Independencia - 404',
                'description' => 'Pagina no encontrada'
            ];

            return $this->view('404', $data);
        }

        return $this->view('posts', $data);
    }
}
