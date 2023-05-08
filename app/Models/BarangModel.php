<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table = 'barang';
    protected $primaryKey = 'no'; // Atur jika primary key bukan 'id'
    protected $allowedFields = ['no', 'nama', 'harga', 'jumlah', 'keterangan'];

    public function getAllBarang()
    {
        return $this->findAll();
    }

    public function getBarangById($id)
    {
        return $this->find($id);
    }

    // Tambahkan method lain sesuai kebutuhan, seperti insert, update, delete, dll.
}
