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
}
