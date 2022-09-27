<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\noticia;
class Noticias extends Controller{

    public function index(){

        $noticia=new Noticia();
        $datos['noticias']=$noticia->orderBy('id','ASC')->findAll();

        $datos['cabecera']=view('template/cabecera');
        $datos['piePagina']=view('template/piePagina');
        return view('noticias/listar',$datos);
    }

    public function crear(){

        $datos['cabecera']=view('template/cabecera');
        $datos['piePagina']=view('template/piePagina');

        return view('noticias/crear',$datos);
    }

    public function guardar(){

        $noticia=new Noticia();

      /*  $fecha=$this->request->getVar('fecha_noticia');
        $titular=$this->request->getVar('titular');
        $texto=$this->request->getVar('texto');
        $categoria=$this->request->getVar('categoria_id');
        $slug=$this->request->getVar('slug');*/


        $datos=[
            'fecha_noticia'=>$this->request->getVar('fecha_noticia'),
            'titular'=>$this->request->getVar('titular'),
            'texto'=>$this->request->getVar('texto'),
            'categoria_id'=>$this->request->getVar('categoria_id'),
            'slug'=>$this->request->getVar('slug')
        ];

        $noticia->insert($datos);
        if($noticia->insert($datos)){

            $session=session();
            $session->setFlashdata('mensaje','registro exitoso');
            
        }else{
            $session=session();
            $session->setFlashdata('mensaje','registro fallido');
        }
        
        
       return $this->response->redirect(site_url('listar'));
    }

    public function borrar($id=null){

      $noticia= new Noticia();        

        $noticia->where('id',$id)->delete($id);

        if($noticia->where('id',$id)->delete($id)){

            $session=session();
            $session->setFlashdata('mensaje','eliminado correctamente');
            
        }else{
            $session=session();
            $session->setFlashdata('mensaje','eliminado correctamente');
        }

        return $this->response->redirect(site_url('listar'));   

               
    }

    public function editar($id=null){

       /*print_r($id);*/

        $noticia=new Noticia();
        $datos['noticia']=$noticia->where('id',$id)->first();


        $datos['cabecera']=view('template/cabecera');
        $datos['piePagina']=view('template/piePagina');



        return view('noticias/editar',$datos);
    }

    public function actualizar(){
        $noticia=new Noticia();

        
        $datos=[             
            'fecha_noticia'=>$this->request->getVar('fecha_noticia'),
            'titular'=>$this->request->getVar('titular'),
            'texto'=>$this->request->getVar('texto'),
            'categoria_id'=>$this->request->getVar('categoria_id'),
            'slug'=>$this->request->getVar('slug')
        ];
        $id=$this->request->getVar('id');
        $noticia->update($id,$datos);

        if($noticia->update($id,$datos)){

            $session=session();
            $session->setFlashdata('mensaje','actualizacion exitosa');
            
        }else{
            $session=session();
            $session->setFlashdata('mensaje','actualizacion fallida');
        }

        echo "actualizacion realizada";

        return $this->response->redirect(site_url('listar'));

    }

}