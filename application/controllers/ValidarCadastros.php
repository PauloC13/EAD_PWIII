<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ValidarCadastros extends CI_Controller
{
    public function validarCadUsuario()
    {

        $dados = [
            'nome' => $this->input->post('nome'),
            'email' => $this->input->post('email'),
            'user' => $this->input->post('user'),
            'senha' => $this->input->post('pass'),
            'cpf' => $this->input->post('cpf'),
            'tipo' => "cliente",
    ];
    $confiSenha = $this->input->post("pass2");
    if(empty($dados["nome"])){
        echo "ErroNome";
        exit();
    }
    if(empty($dados["cpf"])){
        echo "ErroCPF";
        exit();
    }
    if(empty($dados["user"])){
        echo "ErroUser";
        exit();
    }
    if(empty($dados["email"])){
        echo "ErroEmail";
        exit();
    }
    if(empty($dados["senha"])){
        echo "ErroSenha";
        exit();
    }
    if(empty($confiSenha)){
        echo "ErroSenha2";
        exit();
    }
    if($confiSenha != $dados["senha"]){
        echo "ErroSenhaNaoConfere";
        exit();
    }
    if(empty($tipo)){
    $tipo = "cliente";
    }
    echo "sucess";
}
}