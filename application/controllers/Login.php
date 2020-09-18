<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function validarLogin()
    {
        $user = $this->input->post('user');
        $senha = $this->input->post('pass');

        if(empty($user)){
            echo "ErroUser";
            exit();
        }
        if(empty($senha)){
            echo "ErroPass";
            exit();
        }
        echo "sucess";

    }
}