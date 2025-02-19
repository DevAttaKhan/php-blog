<?php

namespace Http\Services;

use Core\Database;
use Core\ValidationException;

class AuthService
{

    public function __construct(private Database $db) {}


    public function saveUser($body)
    {

        ['name' => $name, 'email' => $email, 'password' => $password] = $body;

        $savedUser = $this->db->query('Select * from users where email = ?', [$email])->findOne();

        if ($savedUser) {
            throw new ValidationException(['attempt' => 'user already exists'], $body);
        }

        $hasedPassword = password_hash($password, PASSWORD_BCRYPT);


        return $this->db->queryMutation(
            'INSERT INTO users (name,email, password) values(:name, :email, :password)',
            ['name' => $name, 'email' => $email, 'password' => $hasedPassword]
        );
    }
}
