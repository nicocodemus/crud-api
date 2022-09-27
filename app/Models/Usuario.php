<?php 
namespace App\Models;

use CodeIgniter\Model;

class Usuario extends Model{
    protected $table = 'usuarios';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'id';
     protected $allowedFields=['nombre','clave'];

     public function obtenerUsuario($data){
        $usuario=$this->db->table('usuarios');
        $usuario->where($data);
        return $usuario->get()->getResultArray();
     }
}