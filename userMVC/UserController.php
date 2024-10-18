<?php
require_once 'UserModel.php';

class UserController {
    private $model;

    public function __construct($database) {
        $this->model = new UserModel($database);
    }

    public function getAllUsers() {
        return $this->model->getAllUsers();
    }

    public function createUser($name, $email) {
        return $this->model->createUser($name, $email);
    }

    public function updateUser($id, $name, $email) {
        return $this->model->updateUser($id, $name, $email);
    }

    public function deleteUser($id) {
        return $this->model->deleteUser($id);
    }
}