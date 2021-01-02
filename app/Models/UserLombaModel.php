<?php

namespace App\Models;

use CodeIgniter\Model;

class UserLombaModel extends Model
{
    protected $table      = 'user_lomba';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'user_id', 'lomba_id', 'image_payment', 'is_paid'
    ];

    public function setUserLomba($userId, $lombaId)
    {
        $data = [
            'user_id' => $userId,
            'lomba_id' => $lombaId,
            'image_payment' => 'default.jpg',
            'is_paid' => 0
        ];

        $this->save($data);
    }
}
