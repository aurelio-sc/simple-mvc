<?php

namespace Models;

use Config\Database;

class User
{
    protected $name;
    protected $email;
    protected $password;

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }
    public function setPassword($password): void
    {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function addUserToDatabase()
    {
        $pdo = Database::connect();

        $stmt = $pdo->prepare("INSERT INTO user (name, email, password) VALUES (:name, :email, :password)");

        // Executar a consulta com os dados do usuário
        $stmt->execute([
            ':name' => $this->name,
            ':email' => $this->email,
            ':password' => $this->password
        ]);
    }
}