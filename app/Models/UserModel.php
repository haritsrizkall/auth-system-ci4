<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'name', 'email', 'password', 'image', 'role_id', 'is_active', 'created_at'
    ];

    public function getUserByEmail($userEmail = false)
    {
        if ($userEmail == false) {
            return $this->findAll();
        }

        return $this->where(['email' => $userEmail])->first();
    }

    public function getUsersWithRole($userId = false)
    {
        $db = db_connect();
        $queryUsers = "SELECT * FROM users JOIN role ON users.role_id = role.id";
        $query = $db->query($queryUsers);
        $result = $query->getResultArray();
        return $result;
    }
}
