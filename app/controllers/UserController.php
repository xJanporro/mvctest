<?php

// app/controllers/UserController.php

class UserController
{
    private $model;

    public function __construct()
    {
        $this->model = new UserModel();
    }

    public function index()
    {
        $users = $this->model->getAllUsers();
        require_once 'app/views/user/index.php';
    }
}
