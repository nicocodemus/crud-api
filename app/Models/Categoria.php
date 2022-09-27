<?php 
namespace App\Models;

use CodeIgniter\Model;

class Categoria extends Model{
    protected $table      = 'noticias_categoria';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'id';
     protected $allowedFields=['nombre'];
}