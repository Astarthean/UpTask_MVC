<?php

namespace Controllers;

use MVC\Router;

class LoginController
{

    public static function login(Router $router)
    { 
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            }
        
        $router->render('auth/login', [
            'titulo' => 'Iniciar Sesión',
            'tagline' => 'Crea y Administra tus Proyectos'
        ]);
    }

    public static function logout() {}

    public static function crear(Router $router)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        }

        $router->render('auth/crear', [
            'titulo' => 'Crear Cuenta',
            'tagline' => 'Crea y Administra tus Proyectos'
        ]);
    }

    public static function olvide(Router $router)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        }
        
        $router->render('auth/olvide', [
            'titulo' => 'Olvidé mi Contraseña',
            'tagline' => 'Crea y Administra tus Proyectos'
        ]);
    }

    public static function restablecer(Router $router)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        }

        $router->render('auth/restablecer', [
            'titulo' => 'Restablecer Contraseña',
            'tagline' => 'Crea y Administra tus Proyectos'
        ]);
    }

    public static function mensaje(Router $router) 
    {
        $router->render('auth/mensaje', [
            'titulo' => 'Confirma tu Cuenta',
            'tagline' => 'Crea y Administra tus Proyectos'
        ]);
    }


    public static function confirmar(Router $router) 
    {
        $router->render('auth/confirmar', [
            'titulo' => 'Confirma tu Cuenta',
            'tagline' => 'Crea y Administra tus Proyectos'
        ]);
    }
}
