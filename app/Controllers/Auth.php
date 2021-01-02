<?php

namespace App\Controllers;

use App\Models\UserModel;


class Auth extends BaseController
{
    public function index()
    {

        $userModel = new UserModel();

        if ($this->request->getMethod() == 'post') {

            $rules = [
                'email' => 'required|valid_email',
                'password' => 'required|min_length[8]'
            ];

            if (!$this->validate($rules)) {
                $validation = \Config\Services::validation();
                return redirect()->back()->withInput()->with('validation', $validation);
            } else {
                $dataLogIn = [
                    'email' => htmlspecialchars($this->request->getPost('email')),
                    'password' => $this->request->getPost('password')
                ];
                $user = $userModel->getUserByEmail($dataLogIn['email']);

                if (empty($user)) {
                    $this->session->setFlashdata('failed', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Email is not registered
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
                    redirect()->back()->withInput();
                } else {

                    if (password_verify($dataLogIn['password'], $user['password'])) {
                        $this->setUserSession($user);
                        if ($user['role_id'] == 1) {
                            return redirect()->to('/admin');
                        }
                        return redirect()->to('/user');
                    }

                    $this->session->setFlashdata('failed', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Wrong email or password
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
                }
            }
        }

        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('auth/login', $data);
    }

    public function register()
    {

        $userModel = new UserModel();

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'name' => 'required',
                'email' => 'required|is_unique[users.email]|valid_email',
                'password1' => 'required|min_length[8]',
                'password2' => 'required|min_length[8]|matches[password1]',
                'lomba' => 'required'
            ];

            if (!$this->validate($rules)) {
                $validation =  \Config\Services::validation();
                return redirect()->back()->withInput()->with('validation', $validation);
            } else {
                $inputUser = [
                    'name' => htmlspecialchars($this->request->getPost('name')),
                    'email' => htmlspecialchars($this->request->getPost('email')),
                    'password' => password_hash($this->request->getPost('password1'), PASSWORD_DEFAULT),
                    'image' => 'default.jpg',
                    'role_id' => 2,
                    'is_active' => 1,
                    'created_at' => time()
                ];

                $userModel->save($inputUser);
                $this->session->setFlashdata('success', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Registration success. Please activate your account.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');

                return redirect()->to('/auth');
            }
        };

        $data = [
            'validation' => \Config\Services::validation()
        ];

        return view('auth/register', $data);
        //--------------------------------------------------------------------
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('/auth');
    }

    private function setUserSession($user)
    {
        $userLogIn = [
            'id' => $user['id'],
            'name' => $user['name'],
            'email' => $user['email'],
            'role_id' => $user['role_id'],
            'isLoggedIn' => true
        ];

        $this->session->set($userLogIn);
    }
}
