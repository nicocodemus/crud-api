<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\usuario;
use App\Models\noticia;
use App\Models\categoria;
use CodeIgniter\Router\Exceptions\RedirectException;

class Usuarios extends Controller{


    public function index(){

        $usuario=new Usuario();

        $datos['usuarios']=$usuario->orderBy('id','ASC')->findAll();

        $datos['cabecera']=view('template/cabecera');
        $datos['piePagina']=view('template/piePagina');
        return view('usuarios/listar',$datos);

    }

    public function crear(){
        $datos['cabecera']=view('template/cabecera');
        $datos['piePagina']=view('template/piePagina');

        return view('usuarios/crear',$datos);
    }

    public function guardar(){

        $usuario= new Usuario();

        $datos=[
            'nombre'=>$this->request->getVar('nombre'),
            'clave'=>password_hash($this->request->getVar('clave'),PASSWORD_DEFAULT),
            'rol'=>$this->request->getVar('rol')
           // 'clave'=>$this->request->password_hash((getVar('clave')))
        ];

        //$usuario->insert($datos);
       if($usuario->insert($datos)){

            $session=session();
            $session->setFlashdata('mensaje','registro usuario exitoso');
            
        }else{
            $session=session();
            $session->setFlashdata('mensaje','registro usuario fallido');
        }
        
        
       return $this->response->redirect(site_url('listarUsuarios'));

    }

    public function borrar($id=null){

        $usuario= new Usuario();        
  
          $usuario->where('id',$id)->delete($id);
  
          if($usuario->where('id',$id)->delete($id)){
  
              $session=session();
              $session->setFlashdata('mensaje','eliminado correctamente');
              
          }else{
              $session=session();
              $session->setFlashdata('mensaje','eliminado correctamente');
          }
  
          return $this->response->redirect(site_url('listarUsuarios'));   
  
                 
      }

      public function editar($id){

        $usuario=new Usuario();
        $datos['usuario']=$usuario->where('id',$id)->first();

        
        $datos['cabecera']=view('template/cabecera');
        $datos['piePagina']=view('template/piePagina');



        return view('usuarios/editar',$datos);
    }

    public function actualizar(){

        $usuario=new Usuario();

        $datos=[
            'nombre'=>$this->request->getVar('nombre'),
            'clave'=>password_hash($this->request->getVar('clave'),PASSWORD_DEFAULT),
            'rol'=>$this->request->getVar('rol')
        ];
        $id=$this->request->getVar('id');

        $usuario->update($id,$datos);

        if($usuario->update($id,$datos)){

            $session=session();
            $session->setFlashdata('mensaje','actualizacion exitosa');
            
        }else{
            $session=session();
            $session->setFlashdata('mensaje','actualizacion fallida');
        }

        echo "actualizacion realizada";

        return $this->response->redirect(site_url('listarUsuarios'));
    }

    public function panel(){

        $usuario=new Usuario();

        $datos['usuarios']=$usuario->orderBy('id','ASC')->findAll();

        $categoria=new Categoria();
        $datos['categorias']=$categoria->orderBy('id','ASC')->findAll();

        $noticia=new Noticia();
        $datos['noticias']=$noticia->orderBy('id','ASC')->findAll();

        $datos['cabecera']=view('template/cabecera');
        $datos['piePagina']=view('template/piePagina');

        return view('admin',$datos);


    }
    /*REDIRECCION FORMULARIO LOGEO ADMIN*/
    public function login(){
        $datos['cabecera']=view('template/cabecera');
        $datos['piePagina']=view('template/piePagina');

        return view('loginA',$datos);
    }

    /*METODO PARA RECEPCIONAR DATOS DE LOGEO ADMIN*/

    public function lecture(){

        $username=$this->request->getVar('nombre');
        $password= $this->request->getVar('clave');

        $usuario=new Usuario();

       /* $datos['usuario']=$usuario->where('nombre',$username)->first();*/
       $datosUsuario=$usuario->obtenerUsuario(['nombre'=>$username]);

       /* if($datos['usuario']!=[] && password_verify($password,$datos['usuario']['clave']))*/
        if(count($datosUsuario)>0 && password_verify($password,$datosUsuario[0]['clave'])){//falta encriptacion de contraseña

            $data=[
                'nombre'=>$datosUsuario[0]['nombre'],
                'rol'=>$datosUsuario[0]['rol']
            ];

            $session=session();
            $session->set($data);

           // var_dump($datosUsuario[0]['clave']) ;

            return redirect()->to(base_url('admin'))->with('mensaje','BIENVENIDO ');

        }else{
            return redirect()->to(base_url('loginA'))->with('mensaje','vuelve a intentarlo');
        }
    }

    public function salir(){
        $session=session();
        $session->destroy();
        return redirect()->to(base_url('loginA'));
    }

}