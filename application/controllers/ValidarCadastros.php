<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ValidarCadastros extends CI_Controller
{
    public function validarCadUsuario()
    {

        $dados = [
            'nome' => $this->input->post('nome'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('user'),
            'senha' => $this->input->post('pass'),
            'cpf' => $this->input->post('cpf'),
            'tipo' => "cliente",
    ];
    $confiSenha = $this->input->post("pass2");
    $this->load->model('CadastrosModel');

    if(empty($dados['nome'])){
        echo "ErroNome";
        die();
    }

    if(empty($dados['cpf'])){
        echo "ErroCPF";
        die();
    }

    $resultado = $this->CadastrosModel->VerificarCPF($dados['cpf']);

    if($resultado != ""){
        echo "ErroCPFExiste";
        die();
    }

    if(empty($dados['username'])){
        echo "ErroUser";
        die();
    }

    $resultado = $this->CadastrosModel->VerificarUserName($dados['username']);

    if($resultado != ""){
        echo "ErroUserExiste";
        die();
    }

    if(empty($dados['email'])){
        echo "ErroEmail";
        die();
    }

    $resultado = $this->CadastrosModel->VerificarEmail($dados['email']);

    if($resultado != ""){
        echo "ErroEmailExiste";
        die();
    }

    if(empty($dados['senha'])){
        echo "ErroSenha";
        die();
    }

    if(empty($confiSenha)){
        echo "ErroSenha2";
        die();
    }

    if($confiSenha != $dados['senha']){
        echo "ErroSenhaNaoConfere";
        die();
    }

    if($this->CadastrosModel->CadastrarUsuario($dados)){
        //$this->load->library('session');
        //$this->session->email = $dados['email'];
        echo "sucess";
        die();
    }
    else{
        echo "ErroCadastro";
        exit();
    }
    }
}
?>