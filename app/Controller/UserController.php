<?php

namespace App\Controller;

use App\App\View;
use App\Model\User;

class UserController
{
    private $user;

    function __construct()
    {
        $this->user = new User();
    }

    function index(): void
    {
        View::render('user/index', $this->user->getAll());
    }

    function create(): void
    {
        View::render('user/form');
    }

    function store(): void
    {
        $this->user->storeUser($_POST);

        header('Location: ' . '/user');
    }

    function edit($id): void
    {
        $user = $this->user->getUserByID($id);

        if($user)
            View::render('user/form', $this->user->getUserByID($id));
        else
            header('Location: ' . '/user');
    }

    function update($id): void
    {
        $this->user->updateUser($id, $_POST);

        header('Location: ' . '/user');
    }

    function delete($id): void
    {
        $this->user->deleteUser($id);

        header('Location: ' . '/user');
    }
}