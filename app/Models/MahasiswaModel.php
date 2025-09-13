<?php
namespace App\Models;
use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa';

    // fungsi untuk ambil data dengan query mentah
    public function getMahasiswa()
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM mahasiswa");
        return $query->getResultArray(); //kembalikan sebagai array
    }

    // fungsi untuk ambil detail mahasiswa dari nim
    public function getDetail($nim)
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM mahasiswa WHERE nim = ?", [$nim]);
        return $query->getRowArray();
    }

    
}