<?php

namespace App\Controllers;

use App\Models\MenuModel;

class User extends BaseController
{
    public function index()
    {
        $menuModel = new MenuModel();
        $data = [
            'menu' => $menuModel->getMenuByRole($this->session->get('role_id'))
        ];

        return view('dashboard/dashboard', $data);

        // if ($this->session->get('id')) {
        //     return view('dashboard/dashboard', $data);
        // } else {
        //     return redirect()->to('auth');
        // }
    }

    //--------------------------------------------------------------------

}
