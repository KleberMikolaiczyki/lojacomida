<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Testes extends BaseController
{
    public function index()
    {

        $data = [
            'titulo' => 'curos de como fazer um sistema de entrega de comida com codeigniter 4',
            'subtitulo' => 'Muito massa conhcer a nova versao do code4',
        ];

        return view('Testes/index', $data);
    }
    public function novo(){
        echo 'Esse é mais um metodo do controller Testes';
    }
}
