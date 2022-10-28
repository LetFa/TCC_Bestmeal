<?php

require __DIR__. "/../Models/Users.php";

class UsersController {
    private $users;

    public function __construct() {
        $this->users = new Users();
    }

    public function getAllUsers() {
        $data = $this->users->getAllUsers();
        return $data;
    }

    public function getByEmail($email) {
        $data = $this->users->getEmail($email);
        return $data;
    }

    public function getById($id){
        $data = $this->users->getById($id);
        return $data;
    }

    public function deleteUser($id) {
        $this->users->delete($id);
        return 'Deletado';
    }
}