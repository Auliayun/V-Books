<?php

namespace App\Controllers;

use App\Models\PinjamModel;

class BorrowData extends BaseController
{
    protected $PinjamModel;

    public function __construct()
    {
        $this->PinjamModel = new PinjamModel();
    }
    public function index()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $pinjam = $this->PinjamModel->search($keyword);
        } else {
            $pinjam = $this->PinjamModel->findAll();
        }
        $data = [
            'title' => 'Data Borrow',
            'menu' => 'data_borrow',
            'pinjam' => $pinjam
        ];
        return view('admin/admin-history-data', $data);
    }
    public function update_status($id)
    {

        $data = [
            'status' => $this->request->getPost('status')
        ];

        $this->PinjamModel->update($id, $data);

        return redirect()->to('/history_data_borrowing');
    }
}
