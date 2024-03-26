<?php

namespace App\Model;

use App\App\Database;

class User
{
    private $table = 'users';
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getAll(){
        $this->db->query("SELECT * FROM {$this->table}" );
        return $this->db->resultSet();
    }
    public function getUserByID($id){
        $this->db->query("SELECT * FROM {$this->table} WHERE id=:id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function getUserByEmail($email) {
        $this->db->query("SELECT * FROM {$this->table} WHERE email=:email");
        $this->db->bind('email', $email);
        return $this->db->single();
    }
    public function storeUser($data){
        $query = "INSERT INTO {$this->table} (name, email, password) VALUES (:name, :email, :password)";

        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', password_hash($data['password'], PASSWORD_BCRYPT));
        $this->db->execute();

        return $this->db->rowCount();
    }
    public function updateUser($id, $data){
        $query = "UPDATE {$this->table} SET name=:name, email=:email WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->bind('name', $data['name']);
        $this->db->bind('email', $data['email']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function deleteUser($id){
        $query = "DELETE FROM {$this->table} WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function isLogIn(): bool
    {
        return isset($_SESSION['user']);
    }
}