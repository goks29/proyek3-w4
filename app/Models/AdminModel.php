<?php 
namespace App\Models;
use CodeIgniter\Model;

class AdminModel extends Model 
{
    protected $table      = 'admin';   // tabel di database
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password'];
}
