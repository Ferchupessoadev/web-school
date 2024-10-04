<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Middlewares\LoginMiddleware;
use App\Models\UserModel;

class loginController extends Controller
{
    public function index(): string
    {
        if ($_SESSION) {
            $this->redirect('/admin/dashboard');
        }

        $params = [
            'title' => 'E.E.T N°2 Independencia - Login',
            'description' => 'Sitio administrador para la web de la Escuela Técnica N°2 Independencia',
        ];

        return $this->view('login', $params);
    }

    public function logout(): void
    {
        session_unset();

        if (ini_get('session.use_cookies')) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params['path'], $params['domain'],
                $params['secure'], $params['httponly']);
        }
        session_destroy();
        $this->redirect('/login');
    }

    public function login(): string|array
    {
        if ($_SESSION) {
            $this->redirect('/admin/dashboard');
        }

        $email = $this->request['email'];
        $password = $this->request['password'];

        $loginMiddleware = new LoginMiddleware();

        $response = $loginMiddleware->handle($this->request);

        if ($response != null) {
            $data = [
                'title' => 'E.E.T N°2 Independencia - Login',
                'description' => 'Sitio administrador para la web de la Escuela Técnica N°2 Independencia',
                'error' => $response['error']
            ];
            return $this->view('login', $data);
        }

        $userModel = new UserModel();
        $userModel->getUser($email);

        if (!$userModel->email || !password_verify($password, $userModel->password)) {
            return $this->view('login', [
                'title' => 'E.E.T N°2 Independencia - Login',
                'description' => 'Sitio administrador para la web de la Escuela Técnica N°2 Independencia',
                'error' => 'Email o Contraseña incorrecta'
            ]);
        }

        session_regenerate_id(true);
        $_SESSION['login'] = true;
        $_SESSION['user'] = $userModel->name;
        $this->redirect('/admin/dashboard');
    }
}
