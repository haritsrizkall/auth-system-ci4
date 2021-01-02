<?php

namespace App\Controllers;

use App\Models\MenuModel;
use App\Models\UserModel;

class Menu extends BaseController
{
    public function profile()
    {

        $menuModel = new MenuModel();
        $data = [
            'menu' => $menuModel->getMenu($this->session->get('role_id'))
        ];
        return view('menu/profile', $data);
    }

    public function manageuser()
    {

        $userModel = new UserModel();
        $menuModel = new MenuModel();
        $data = [
            'users' => $userModel->getUsersWithRole(),
            'menu' => $menuModel->getMenu($this->session->get('role_id'))
        ];
        return view('menu/user_management', $data);
    }

    //--------------------------------------------------------------------

}
