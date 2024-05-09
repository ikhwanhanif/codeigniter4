<?php

namespace App\Controllers;

use App\Models\ImageModel;

class Images extends BaseController
{
    public function index()
    {
        $imageModel = new ImageModel();
        $data['images'] = $imageModel->findAll();
        return view('images/index', $data);
    }

    public function create()
    {
        return view('images/create');
    }

    public function store()
    {
        $imageModel = new ImageModel();
        
        $file_gambar = $this->request->getFile('file_gambar');

        $data = [
            'nama' => $this->request->getPost('nama'),
            'deskripsi'  => $this->request->getPost('deskripsi'),
            'file_gambar' => $file_gambar->getClientName(),
        ];

        // Upload file gambar
        if ($file_gambar->isValid() && !$file_gambar->hasMoved()) {
            $newName = $file_gambar->getClientName();
            $file_gambar->move('uploads', $newName);
        }

        $imageModel->insert($data);
        
        return redirect()->to(base_url('/'));
    }


    public function edit($id = null)
    {
        $imageModel = new ImageModel();
        $data['image'] = $imageModel->find($id);
        return view('images/edit', $data);
    }

    public function update()
    {
        $imageModel = new ImageModel();
        
        $id = $this->request->getPost('id');
        
        $data = [
            'nama' => $this->request->getPost('nama'),
            'deskripsi'  => $this->request->getPost('deskripsi'),
        ];

        // Cek apakah ada file gambar yang diunggah
        $file_gambar = $this->request->getFile('file_gambar');
        if ($file_gambar->isValid() && !$file_gambar->hasMoved()) {
            // Hapus file gambar lama
            $oldImage = $imageModel->find($id)['file_gambar'];
            unlink('uploads/' . $oldImage);

            // Upload file gambar baru
            $newName = $file_gambar->getClientName();
            $file_gambar->move('uploads', $newName);
            $data['file_gambar'] = $newName;
        }

        $imageModel->update($id, $data);
        
        return redirect()->to(base_url('/'));
    }

    public function delete($id = null)
    {
        $imageModel = new ImageModel();
        $oldImage = $imageModel->find($id)['file_gambar'];
        unlink('uploads/' . $oldImage);
        $imageModel->delete($id);
        return redirect()->to(base_url('/'));
    }
}
