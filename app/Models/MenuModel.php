<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table      = 'menu';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'menu', 'title', 'url', 'icon'
    ];

    public function getMenuByRole($roleId = false)
    {
        $db = db_connect();
        $queryMenu = "SELECT * FROM menu JOIN role_menu 
                        ON menu.id = role_menu.menu_id
                        WHERE role_menu.role_id = '$roleId'";
        $query = $db->query($queryMenu);
        $menu = $query->getResultArray();
        return $menu;
    }

    public function getMenuByUrl($url = false, $roleId = false)
    {
        $db = db_connect();
        $queryMenu = "SELECT * FROM menu JOIN role_menu 
                        ON menu.id = role_menu.menu_id
                        WHERE menu.url = '$url' AND role_menu.role_id = '$roleId'";
        $query = $db->query($queryMenu);
        $menu = $query->getResultArray();
        return $menu;
    }
}
