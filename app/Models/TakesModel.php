<?php 
namespace App\Models;
use CodeIgniter\Model;

class TakesModel extends Model 
{
    protected $table      = 'takes';   // tabel di database
    protected $primaryKey = 'id';
    protected $allowedFields = ['student_id', 'course_id', 'enroll_date'];
}
