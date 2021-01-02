<?php

namespace App\Controllers;

use App\Models\MenuModel;
use App\Models\UserModel;

class Menu extends BaseController
{
    function __construct()
    {
        if (session('role_id') == 2) {
            return redirect()->to(base_url('auth/blocked'));
        }
        // $menuModel = new MenuModel();
        // $uri = current_url(true);
        // $menuUrl = $uri->getSegment(1) . '/' . $uri->getSegment(2);
        // $menu = $menuModel->getMenuByUrl($menuUrl, session('role_id'));
        // redirect()->to('auth/blocked');
    }

    public function profile()
    {

        $menuModel = new MenuModel();
        $data = [
            'menu' => $menuModel->getMenuByRole($this->session->get('role_id'))
        ];
        return view('menu/profile', $data);
    }

    public function manageuser()
    {

        $userModel = new UserModel();
        $menuModel = new MenuModel();
        $data = [
            'users' => $userModel->getUsersWithRole(),
            'menu' => $menuModel->getMenuByRole($this->session->get('role_id'))
        ];
        return view('menu/user_management', $data);
    }

    public function blocked()
    {
        return view('errors/blocked');
    }
    //--------------------------------------------------------------------

}
