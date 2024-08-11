<?php

namespace App\Controllers;

use App\Models\FinalModel;
use App\Models\GeneralModel;

class BookData extends BaseController
{
    protected $GeneralModel;
    protected $FinalModel;

    public function __construct()
    {
        $this->GeneralModel = new GeneralModel();
        $this->FinalModel = new FinalModel();
    }

    public function book_data()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $book = $this->GeneralModel->search($keyword);
        } else {
            $book = $this->GeneralModel->findAll();
        }
        $data = [
            'title' => 'Book Data',
            'menu' => 'book_data',
            'book' => $book
        ];
        return view('admin/admin-book-data', $data);
    }
    public function book_data_final()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $book = $this->FinalModel->search($keyword);
        } else {
            $book = $this->FinalModel->findAll();
        }
        $data = [
            'title' => 'Book Data',
            'menu' => 'book_data',
            'book' => $book
        ];
        return view('admin/admin-book-data-final', $data);
    }
    public function tambah_buku_general()
    {
        $data = [
            'title' => 'Add Book General',
            'menu' => 'book_data',
        ];
        return view('admin/admin-add-book-general', $data);
    }

    public function tambah_buku_final()
    {
        $data = [
            'title' => 'Add Book Final Task',
            'menu' => 'book_data',
        ];
        return view('admin/admin-add-book-final', $data);
    }
    public function save_general()
    {
        $fileGambar = $this->request->getFile('cover');
        $namaGambar = $fileGambar->getRandomName();
        $fileGambar->move('img', $namaGambar);
        $this->GeneralModel->save([
            'cover' => $namaGambar,
            'title' => $this->request->getVar('title'),
            'author' => $this->request->getVar('author'),
            'category' => $this->request->getVar('category'),
            'description' => $this->request->getVar('description'),
            'year' => $this->request->getVar('year'),
            'total_page' => $this->request->getVar('total_page'),
            'language' => $this->request->getVar('language'),
            'link_gdrive' => $this->request->getVar('link_gdrive'),
        ]);
        session()->setFlashdata('pesan', 'berhasil menambah buku general');
        return redirect()->to('/book_data');
    }
    public function edit_general($id = false)
    {
        $book = $this->GeneralModel->where('id_buku', $id)->first();
        $data = [
            'title' => 'Edit Book General',
            'menu' => 'book_data',
            'book' => $book
        ];
        return view('admin/admin-edit-book-general', $data);
    }
    public function edit_save_general()
    {
        $GeneralModel = new GeneralModel();
        $namaGambar = $this->request->getVar('gambarLama');
        // Periksa apakah ada gambar yang diunggah
        $fileGambar = $this->request->getFile('cover');
        if ($fileGambar && $fileGambar->isValid()) {
            // Jika ada gambar yang diunggah, simpan gambar ke direktori 'img' dan dapatkan nama filenya
            $namaGambar = $fileGambar->getRandomName();
            $fileGambar->move('img', $namaGambar);
            unlink('img/' . $this->request->getVar('gambarLama'));
        } else {
            // Jika tidak ada gambar yang diunggah, gunakan gambar default
            $namaGambar = $namaGambar;
        }

        // Menyiapkan data yang ingin diupdate
        $dataToUpdate = array(
            'cover' => $namaGambar,
            'title' => $this->request->getVar('title'),
            'author' => $this->request->getVar('author'),
            'category' => $this->request->getVar('category'),
            'description' => $this->request->getVar('description'),
            'year' => $this->request->getVar('year'),
            'total_page' => $this->request->getVar('total_page'),
            'language' => $this->request->getVar('language'),
            'link_gdrive' => $this->request->getVar('link_gdrive'),
        );

        // Lakukan update hanya pada field-field yang diinginkan
        $GeneralModel->update($this->request->getPost('id_buku'), $dataToUpdate);
        session()->setFlashdata('pesan', 'berhasil mengupdate buku general');
        return redirect()->to('/book_data');
    }
    public function delete_general($id = false)
    {
        $GeneralModel = new GeneralModel();

        $aktivitas = $GeneralModel->find($id);

        if ($aktivitas) {
            $gambar = $aktivitas['cover'];
            if ($gambar && file_exists('img/' . $gambar)) {
                unlink('img/' . $gambar);
            }
            $GeneralModel->delete($id);

            session()->setFlashdata('pesan', 'Berhasil menghapus buku general');
        } else {
            session()->setFlashdata('error', 'Buku tidak ditemukan');
        }

        return redirect()->to('/book_data');
    }
    public function save_final()
    {
        $fileGambar = $this->request->getFile('cover');
        $namaGambar = $fileGambar->getRandomName();
        $fileGambar->move('img', $namaGambar);
        $this->FinalModel->save([
            'cover' => $namaGambar,
            'title' => $this->request->getVar('title'),
            'author' => $this->request->getVar('author'),
            'category' => $this->request->getVar('category'),
            'description' => $this->request->getVar('description'),
            'year' => $this->request->getVar('year'),
            'program_studi' => $this->request->getVar('program_studi'),
            'total_page' => $this->request->getVar('total_page'),
            'language' => $this->request->getVar('language'),
            'link_gdrive' => $this->request->getVar('link_gdrive'),
        ]);
        session()->setFlashdata('pesan', 'berhasil menambah buku final task');
        return redirect()->to('/book_data_final');
    }
    public function edit_final($id = false)
    {
        $book = $this->FinalModel->where('id_buku', $id)->first();
        $data = [
            'title' => 'Edit Book final',
            'menu' => 'book_data',
            'book' => $book
        ];
        return view('admin/admin-edit-book-final', $data);
    }
    public function edit_save_final()
    {
        $finalModel = new FinalModel();
        $namaGambar = $this->request->getVar('gambarLama');
        // Periksa apakah ada gambar yang diunggah
        $fileGambar = $this->request->getFile('cover');
        if ($fileGambar && $fileGambar->isValid()) {
            // Jika ada gambar yang diunggah, simpan gambar ke direktori 'img' dan dapatkan nama filenya
            $namaGambar = $fileGambar->getRandomName();
            $fileGambar->move('img', $namaGambar);
            unlink('img/' . $this->request->getVar('gambarLama'));
        } else {
            // Jika tidak ada gambar yang diunggah, gunakan gambar default
            $namaGambar = $namaGambar;
        }

        // Menyiapkan data yang ingin diupdate
        $dataToUpdate = array(
            'cover' => $namaGambar,
            'title' => $this->request->getVar('title'),
            'author' => $this->request->getVar('author'),
            'category' => $this->request->getVar('category'),
            'description' => $this->request->getVar('description'),
            'year' => $this->request->getVar('year'),
            'program_studi' => $this->request->getVar('program_studi'),
            'total_page' => $this->request->getVar('total_page'),
            'language' => $this->request->getVar('language'),
            'link_gdrive' => $this->request->getVar('link_gdrive'),
        );

        // Lakukan update hanya pada field-field yang diinginkan
        $finalModel->update($this->request->getPost('id_buku'), $dataToUpdate);
        session()->setFlashdata('pesan', 'berhasil mengupdate buku final task');
        return redirect()->to('/book_data_final');
    }
    public function delete_final($id = false)
    {
        $finalModel = new FinalModel();

        $aktivitas = $finalModel->find($id);

        if ($aktivitas) {
            $gambar = $aktivitas['cover'];
            if ($gambar && file_exists('img/' . $gambar)) {
                unlink('img/' . $gambar);
            }
            $finalModel->delete($id);

            session()->setFlashdata('pesan', 'Berhasil menghapus buku final task');
        } else {
            session()->setFlashdata('error', 'Buku tidak ditemukan');
        }

        return redirect()->to('/book_data');
    }


    
}
