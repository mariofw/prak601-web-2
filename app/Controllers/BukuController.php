<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BukuModel;

class BukuController extends BaseController
{
    public function index()
    {
        return view('buku/index', [
            'buku' => (new BukuModel())->findAll()
        ]);
    }

    public function create()
    {
        return view('buku/create');
    }

    public function store()
    {
        $buku = new BukuModel();

        $buku->insert([
            'judul' => $this->request->getPost('judul'),
            'penulis' => $this->request->getPost('penulis'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
        ]);

        return redirect()->to('/buku');
    }

    public function edit($id)
    {
        return view('buku/edit', [
            'buku' => (new BukuModel())->find($id)
        ]);
    }

    public function update($id)
    {
        $buku = new BukuModel();

        $buku->update($id, [
            'judul' => $this->request->getPost('judul'),
            'penulis' => $this->request->getPost('penulis'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
        ]);

        return redirect()->to('/buku');
    }

    public function delete($id)
    {
        $buku = new BukuModel();

        $buku->delete($id);

        return redirect()->to('/buku');
    }

    
}