<?php

namespace App\Middlewares;

class LoginMiddleware extends Middleware
{
    /**
     * Handle
     * @param array $request
     * @return array|null
     */
    public function handle(array $request): array|null
    {
        $email = $request['email'];
        $password = $request['password'];

        if (empty($email) || empty($password)) {
            return [
                'title' => 'E.E.T N°2 Independencia - Login',
                'description' => 'Sitio administrador para la web de la Escuela Técnica N°2 Independencia',
                'error' => 'Todos los campos son obligatorios'
            ];
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return [
                'title' => 'E.E.T N°2 Independencia - Login',
                'description' => 'Sitio administrador para la web de la Escuela Técnica N°2 Independencia',
                'error' => 'Email o contraseña no válida'
            ];
        }

        return null;
    }
}
