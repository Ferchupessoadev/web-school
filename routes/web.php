<?php

use App\Controllers\dashboardController;
use App\Controllers\loginController;
use App\Controllers\newsController;
use lib\Route;
use lib\view;

Route::get('/', function () {
    $data = [
        'title' => 'E.E.T N°2 Independencia',
        'description' => 'Escuela Técnica N°2 Independencia'
    ];

    $viewHome = new view();
    return $viewHome->view('home', $data);
});

Route::get('/formacion-profesional', function () {
    $data = [
        'title' => 'E.E.T N°2 Independencia - Formación Profesional',
        'description' => 'Formación Profesional'
    ];

    $viewFormProf = new view();
    return $viewFormProf->view('formacionProfesional', $data);
});

Route::get('computacion', function () {
    $data = [
        'title' => 'E.E.T N°2 Independencia - Computación',
        'description' => 'Formación técnica en computación: asistencia informática, instalación, mantenimiento, redes, programación C/C++ y mas.'
    ];

    $viewComputacion = new view();
    return $viewComputacion->view('computacion', $data);
});

Route::get('/admdeempresas', function () {
    $data = [
        'title' => 'E.E.T N°2 Independencia - Adm. de Empresas',
        'description' => 'Administración de Empresas en la Escuela Técnica N°2 Independencia'
    ];

    $viewAdmEmp = new view();
    return $viewAdmEmp->view('admdeempresas', $data);
});

Route::get('/gastronomia', function () {
    $data = [
        'title' => 'E.E.T N°2 Independencia - Gastronomía',
        'description' => 'Técnico en Gastronomía: especializado en preelaboración, preparación, conservación de platos básicos, avanzados y mas.'
    ];

    $viewGastronomia = new view();
    return $viewGastronomia->view('gastronomia', $data);
});

Route::get('/ciclo-basico', function () {
    $data = [
        'title' => 'E.E.T N°2 Independencia - Ciclo Básico',
        'description' => 'Ciclo Básico'
    ];

    $viewCicloBasico = new view();
    return $viewCicloBasico->view('cycle_basic', $data);
});

Route::get('/policy', function () {
    $data = [
        'title' => 'E.E.T N°2 Independencia - Politica de Cookies',
        'description' => 'Politica de Cookies'
    ];

    $viewPolicy = new view();
    return $viewPolicy->view('policy', $data);
});

Route::get('/cookies', function () {
    $data = [
        'title' => 'E.E.T N°2 Independencia - Cookies',
        'description' => 'Cookies de la Escuela Técnica N°2 Independencia'
    ];

    $viewCookies = new view();
    return $viewCookies->view('cookies', $data);
});

Route::get('/contactanos', function () {
    $data = [
        'title' => 'E.E.T N°2 Independencia - Contactanos',
        'description' => 'Contactanos para dudas o consultas'
    ];

    $viewContactanos = new view();
    return $viewContactanos->view('contact', $data);
});

// routes for news
Route::get('/login', [loginController::class, 'index']);
Route::get('/logout', [loginController::class, 'logout']);
Route::post('/login', [loginController::class, 'login']);

Route::get('/admin/dashboard', [dashboardController::class, 'index']);
Route::get('/publicaciones', [newsController::class, 'index']);

// dynamic routes
Route::get('/publicaciones/{title}', [newsController::class, 'show']);

Route::start();
