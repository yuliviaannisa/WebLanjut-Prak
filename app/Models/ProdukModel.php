<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{

    protected $table = "produk";

    public function getProduk($id = false)
    {

        if ($id == false) {
            return $this->table('produk')
                ->get()
                ->getResultArray();
        } else {
            return $this->table('produk')
                ->where('id', $id)
                ->get()
                ->getRowArray();
        }
    }
}