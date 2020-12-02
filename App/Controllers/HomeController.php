<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\catabagulho;

class HomeController extends Controller {
    public function index (){
        $this->view('Home');
    }

    public function acesso(){
        $this->view('Acesso');
    }

    public function cadastro(){
        $this->view('Cadastro');
    }

    public function clientes(){
        // $catabagulho = new catabagulho();
        // $dados = $catabagulho->get('catabagulho');

        // $this->view('Clientes',$dados);

        $this->view('Clientes');
    }

    public function agendamento(){
        $this->view('Agendamento');
    }

    public function itens(){
        $this->view('Itens');
    }

    public function consulta_agendamento(){
        $this->view('Consulta_Agendamento');
    }

    public function consulta_cadastro(){
        $this->view('Consulta_Cadastro');
    }

}