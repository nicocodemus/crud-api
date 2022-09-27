<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(){  
        
          $datos['cabecera']=view('template/cabecera');
          $datos['piePagina']=view('template/piePagina');

          return view('inicio',$datos);
    }

   
}
