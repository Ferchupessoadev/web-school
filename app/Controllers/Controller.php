<?php

namespace app\Controllers;

abstract class Controller
{
    /**
     * Render a view
     * @param string $view
     * @param array $data
     * @return string
     */
    public function view(string $view, array $data = []): string
    {
        $view = str_replace('.', '/', $view);
        foreach ($data as $key => $value) {
            $data[$key] = htmlspecialchars($value);
        }

        extract($data);

        if (file_exists('../resources/views/' . $view . '.php')) {
            ob_start();
            include '../resources/views/' . $view . '.php';
            $content = ob_get_clean();

            return $content;
        }
    }
}
