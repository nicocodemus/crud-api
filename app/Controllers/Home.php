<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(){  
        
          $datos['cabecera']=view('template/cabecera');
          $datos['piePagina']=view('template/piePagina');

          return view('inicio',$datos);
    }

    public function api(){
        $data['cabecera']=view('template/cabecera');
        $data['piePagina']=view('template/piePagina');

        $apiKey="61581573808824a4f085f7d212f33e4c";
        $lat="42.81687";
        $lon="-1.64323";
        $url="https://api.openweathermap.org/data/2.5/weather?lat=42.81687&lon=-1.64323&appid=".$apiKey."&units=metric&lang=es";
       // "https://api.openweathermap.org/data/2.5/weather?lat=".$lat."&lon=".$lon."&appid=".$apiKey;

        //https://api.openweathermap.org/data/2.5/weather?lat={lat}&lon={lon}&appid={API key}

        //echo$url;

        /*init curl resource */
        $ch =curl_init($url);

        /*set curl return type <json></json>*/

        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

        /*execute curl request */

        $result=curl_exec($ch);

        //print_r($result);

        //close curl resource

        curl_close($ch);

        $data['clima']=json_decode($result,true);

        //print_r($data);

       return view('tiempo',$data);
    }

   
}
