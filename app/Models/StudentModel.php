<?php 
namespace App\Models;
use CodeIgniter\Model;

class StudentModel extends Model 
{
    protected $table      = 'students';   // tabel di database
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','entry_year'];
}
