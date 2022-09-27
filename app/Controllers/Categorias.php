<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\categoria;
class Categorias extends Controller{


    public function index(){

        $categoria=new Categoria();
        $datos['categorias']=$categoria->orderBy('id','ASC')->findAll();

        $datos['cabecera']=view('template/cabecera');
        $datos['piePagina']=view('template/piePagina');
        return view('categorias/listar',$datos);
    }

    public function crear(){

        $datos['cabecera']=view('template/cabecera');
        $datos['piePagina']=view('template/piePagina');

        return view('categorias/crear',$datos);
    }

    public function guardar(){
        $categoria= new Categoria();

        $datos=[
            'nombre'=>$this->request->getVar('nombre')
        ];

        //$categoria->insert($datos);
        if($categoria->insert($datos)){

            $session=session();
            $session->setFlashdata('mensaje','registro categoria exitoso');
            
        }else{
            $session=session();
            $session->setFlashdata('mensaje','registro Categoria fallido');
        }
        
        
       return $this->response->redirect(site_url('listarCategorias'));
    }

    public function borrar($id=null){
        $categoria= new Categoria();
        
        $categoria->where('id',$id)->delete($id);

        if($categoria->where('id',$id)->delete($id)){

            $session=session();
            $session->setFlashdata('mensaje','categoria eliminada correctamente');
            
        }else{
            $session=session();
            $session->setFlashdata('mensaje','categoria no eliminada');
        }

        return $this->response->redirect(site_url('listarCategorias'));
    }

    public function editar($id){

        $categoria=new Categoria();
        $datos['categoria']=$categoria->where('id',$id)->first();

        
        $datos['cabecera']=view('template/cabecera');
        $datos['piePagina']=view('template/piePagina');



        return view('categorias/editar',$datos);
    }

    public function actualizar(){

        $categoria=new Categoria();

        $datos=[
            'nombre'=>$this->request->getVar('nombre')
        ];
        $id=$this->request->getVar('id');

        $categoria->update($id,$datos);

        if($categoria->update($id,$datos)){

            $session=session();
            $session->setFlashdata('mensaje','actualizacion exitosa');
            
        }else{
            $session=session();
            $session->setFlashdata('mensaje','actualizacion fallida');
        }

        echo "actualizacion realizada";

        return $this->response->redirect(site_url('listarCategorias'));
    }
}