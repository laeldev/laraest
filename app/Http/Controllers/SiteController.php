<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{
    //

    public function index(){

        $data = [
            'ingredientes' => [
                'farinha',
                'ovos',
                'farinha 2',
                'ovos 2'
            ]
        ];

        return view('bemvindo',$data);
    }

    public function exercicios1() {

        $pessoas = [
              [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),  
                'nome' => 'Alessandro', 
                'birth' => '29/01/90', 
                'idade' => 29],
                
              [ 
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50), 
                'nome' => 'Bonieky', 
                'birth' => '10/11/1933', 
                'idade' => 90],
  
              [ 
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50), 
                'nome' => 'Maria', 
                'birth' => '01/01/2020', 
                'idade' => 2]
        ];

        $dados['pessoas'] = $pessoas;
    
        return view('exercicios1', $dados);
    }

    public function exercicios2(){
        $numero = 1;

        $url = 'https://i.pravatar.cc/150?img=';

        $dados['url'] = $url;

        return view('exercicios2',$dados);

    }
}
