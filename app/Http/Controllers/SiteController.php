<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{
    //

    public function index(){

        $nome = 'André';

        $data = [
            'apelido_nome' => $nome,
        ];

        return view('bemvindo',$data);
    }

    public function sair(){
        return view('sair');
    }

    public function users(Request $r){
        $data=[
            'quantidade' => $r->qnt
        ];
        return view('usuarios', $data);
    }
}
