<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function validarLogin()
    {
        $email = $this->input->post('user');
        $senha = $this->input->post('pass');

        $this->load->model('LoginModel');

        if(empty($email)){
            echo "ErroUser";
            exit();
        }
        if(empty($senha)){
            echo "ErroPass";
            exit();
        }
        $resultado = $this->LoginModel->LoginUsuario($email, $senha);
        if($resultado != ""){
            echo "sucess";
            die();
        }
        if(empty($resultado)){
            echo "ErroLogin";
            die();
        }
    }
}