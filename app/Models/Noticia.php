<?php 
namespace App\Models;

use CodeIgniter\Model;

class Noticia extends Model{
    protected $table      = 'noticias';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields=['fecha_noticia','titular','texto','categoria_id','slug'];
}