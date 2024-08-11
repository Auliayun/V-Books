<?php

namespace App\Controllers;

use App\Models\AuthModel;

class AuthController extends BaseController
{
    protected $Model_Auth;

    public function __construct()
    {
        helper('form');
        $this->Model_Auth = new AuthModel();
    }

    public function register()
    {
        $data = array(
            'title' => 'Register',
        );
        return view('/register', $data);
    }

    public function save_register()
    {
        if ($this->validate([
            'nama_lengkap' => [
                'label' => 'Nama Lengkap',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi !'
                ]
            ],
            'username' => [
                'label' => 'Username',
                'rules' => 'required|is_unique[user.username]',
                'errors' => [
                    'required' => '{field} wajib diisi !',
                    'is_unique' => '{field} sudah pernah terdaftar, gunakan username lain !',
                ]
            ],
            'email' => [
                'label' => 'Email',
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '{field} wajib diisi !',
                    'valid_email' => 'Yang anda input bukan email !'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi !'
                ]
            ],
        ])) {
            // jika valid
            $data = array(
                'nama_lengkap' => $this->request->getPost('nama_lengkap'),
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'password' => $this->request->getPost('password'),
                'level' => 'user',

            );
            $this->Model_Auth->save_register($data);
            session()->setFlashdata('pesan', 'Register telah berhasil, silahkan login');
            return redirect()->to(base_url('/login'));
        } else {
            // jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('/register'))->withInput();
        }
    }
    public function login()
    {
        $data = array(
            'title' => 'Login',
        );
        return view('login', $data);
    }

    public function cek_login()
    {
        if ($this->validate([
            'username' => [
                'label' => 'Username',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi !'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi !'
                ]
            ],
        ])) {
            // jika valid
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $cek = $this->Model_Auth->login($username, $password);
            if ($cek) {
                //jika cocok
                session()->set('log', true);
                session()->set('id', $cek['id_user']);
                session()->set('nama', $cek['nama_lengkap']);
                session()->set('username', $cek['username']);
                session()->set('email', $cek['email']);
                session()->set('password', $cek['password']);
                session()->set('level', $cek['level']);
                //percabangan admin & user
                if ($cek['level'] == 'admin') {
                    return redirect()->to(base_url('book_data'));
                } elseif ($cek['level'] == 'user') {
                    return redirect()->to(base_url('home_page'));
                }
            } else {
                //jika email dan password tidak valid
                session()->setFlashdata('salah', 'Username atau password anda salah !');
                return redirect()->to(base_url('/login'));
            }
        } else {
            // jika tidak valid
            session()->setFlashdata('errorslogin', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('/login'));
        }
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/login'));
    }
    public function profile()
    {
        $id = session()->get('id');
        $profile = $this->Model_Auth->where('id_user', $id)->first();
        $data = [
            'title' => 'Profile',
            'menu' => 'profile',
            'profile' => $profile
        ];
        return view('user/profile', $data);
    }
    public function edit_profile()
    {
        $id = session()->get('id');
        $profile = $this->Model_Auth->where('id_user', $id)->first();
        $data = [
            'title' => 'Profile',
            'menu' => 'profile',
            'profile' => $profile
        ];
        return view('user/editProfile', $data);
    }
    public function save_profile()
    {
        $id = session()->get('id');
        $data = array(
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'email' => $this->request->getPost('email'),
            'no_hp' => $this->request->getPost('no_hp'),
            'nim' => $this->request->getPost('nim'),
            'program_studi' => $this->request->getPost('program_studi'),
        );
        $this->Model_Auth->update($id, $data);
        session()->setFlashdata('pesan', 'Berhasil mengedit profile');
        return redirect()->to(base_url('/profile'));
    }
}
