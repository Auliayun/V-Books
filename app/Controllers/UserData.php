<?php

namespace App\Controllers;

use App\Models\AuthModel;
use App\Models\SaveFinalModel;
use App\Models\SaveGeneralModel;
use App\Models\PinjamModel;

class UserData extends BaseController
{
    protected $AuthModel;
    protected $SaveFinalModel;
    protected $SaveGeneralModel;
    protected $PinjamModel;

    public function __construct()
    {
        $this->AuthModel = new AuthModel();
        $this->SaveFinalModel = new SaveFinalModel();
        $this->SaveGeneralModel = new SaveGeneralModel();
        $this->PinjamModel = new PinjamModel();
    }

public function index()
{
    $keyword = $this->request->getVar('keyword');
    if ($keyword) {
        $user = $this->AuthModel->where('level', 'user')->like('nama_lengkap', $keyword)->findAll();
    } else {
        $user = $this->AuthModel->where('level', 'user')->findAll();
    }
    
    $data = [
        'title' => 'Data User',
        'menu' => 'data_user',
        'user' => $user
    ];
    return view('admin/admin-user-data', $data);
}





    public function edit_user($id = false)
    {
        $user = $this->AuthModel->find($id);
        if (!$user) {
            return redirect()->to('/data_user');
        }
        $data = [
            'title' => 'Edit User',
            'menu' => 'data_user',
            'user' => $user
        ];
        return view('admin/edit_user', $data);
    }

public function save_edit_user()
{
    $request = service('request');

    $id_user = $request->getPost('id_user');
    $nama = $request->getPost('nama_lengkap');
    $username = $request->getPost('username');
    $email = $request->getPost('email');
    $nim = $request->getPost('nim');
    $program_studi = $request->getPost('program_studi');
    $no_hp = $request->getPost('no_hp');
    $alamat = $request->getPost('alamat');

    $data = [
        'nama_lengkap' => $nama,
        'username' => $username,
        'email' => $email,
        'nim' => $nim,
        'program_studi' => $program_studi,
        'no_hp' => $no_hp,
        'alamat' => $alamat
    ];
    
    $this->AuthModel->update($id_user, $data);

    session()->setFlashdata('pesan', 'Data user berhasil diupdate');
    return redirect()->to('/data_user');
}



    public function delete_user($id = false)
{
    

    // Proses penghapusan pengguna
    $db = \Config\Database::connect();
    $db->transStart();

    try {
        $this->PinjamModel->where('id_user', $id)->delete();
        $this->SaveFinalModel->where('id_user', $id)->delete();
        $this->SaveGeneralModel->where('id_user', $id)->delete();
        $this->AuthModel->delete($id);

        $db->transComplete();

        if ($db->transStatus() === FALSE) {
            session()->setFlashdata('error', 'Failed to delete user');
        } else {
            session()->setFlashdata('pesan', 'Data user berhasil dihapus');
        }
    } catch (\Exception $e) {
        $db->transRollback();
        session()->setFlashdata('error', 'Failed to delete user');
    }

    return redirect()->to('/data_user');
}


}