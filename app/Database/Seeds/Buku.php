<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder; use App\Models\BukuModel;

class Buku extends Seeder
{
public function run()
{
$this->db->table('buku')->insert([
'judul' => 'Belajar Pemrograman Java', 'penulis' => 'Petani Kode',
'penerbit' => 'PT Gramedia', 'tahun_terbit' => '2020'
]);

$this->db->table('buku')->insert([ 'judul' => 'Belajar Pemrograman PHP', 'penulis' => 'Petani Kode', 'penerbit' => 'PT Gramedia', 'tahun_terbit' => '2020'
]);

$this->db->table('buku')->insert([
'judul' => 'Belajar Pemrograman Python', 'penulis' => 'Petani Kode',
'penerbit' => 'PT Gramedia', 'tahun_terbit' => '2020'
]);
}
}
