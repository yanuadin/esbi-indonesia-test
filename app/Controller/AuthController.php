<?php

namespace App\Controller;

use App\App\View;
use App\Model\User;

class AuthController
{
    private $user;

    function __construct() {
        session_start();
        $this->user = new User();
    }

    function firstPage(): void
    {
        if ($this->user->isLogIn()) {
            header('Location: ' . '/user');
        } else {
            header('Location: /login');
        }
    }

    function login():void
    {
        if ($this->user->isLogIn()) {
            header('Location: ' . '/user');
        } else {
            View::render('login');
        }
    }

    function loginProcess():void
    {
        if ($this->user->isLogIn()) {
            header('Location: ' . '/user');
        } else {
            $user = $this->user->getUserByEmail($_POST['email']);
            if($user && password_verify($_POST['password'], $user['password'])) {
                unset($user['password']);

                $_SESSION['user'] = $user;

                header('Location: ' . '/user');
            } else {
                header('Location: /login');
            }
        }
    }

    function register(): void
    {
        if ($this->user->isLogIn()) {
            header('Location: ' . '/user');
        } else {
            View::render('register');
        }
    }

    function registerProcess(): void
    {
        if ($this->user->isLogIn()) {
            header('Location: ' . '/user');
        } else {
            if($this->user->storeUser($_POST) > 0) {
                unset($_POST['password']);
                $_SESSION['user'] = $_POST;

                header('Location: ' . '/user');
            } else {
                header('Location: ' . '/register');
            }
        }
    }

    function logout(): void
    {
        if ($this->user->isLogIn()) {
            session_destroy();
        }

        header('Location: /login');
    }
}