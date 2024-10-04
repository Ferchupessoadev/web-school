<?php

namespace App\Models;

class UserModel extends Model
{
    public $table = 'users';
    public $id;
    public $name;
    public $email;
    public $password;

    /**
     * get user by email
     * @param string $email
     * @return array
     */
    public function getUser(string $email): void
    {
        $sql = "SELECT * FROM $this->table WHERE email = ? LIMIT 1";
        $params = ['s' => $email];
        $result = $this->prepare($sql, $params)->first();
        if ($result) {
            $this->password = $result['password'];
            $this->id = $result['id'];
            $this->name = $result['name'];
            $this->email = $result['email'];
        }
    }
}
