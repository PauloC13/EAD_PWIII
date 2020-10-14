<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CadastrosModel extends CI_Model {

    public function CadastrarUsuario($dados)
    {
        return $this->db->insert('Usuario', $dados);
    }
    public function VerificarUserName($userName)
    {
        $this->db->where('username', $userName);
        $resultado = $this->db->get('Usuario')->row_array();
        return $resultado;
    }
    public function VerificarEmail($email)
    {
        $this->db->where('email', $email);
        $resultado = $this->db->get("Usuario")->row_array();
        return $resultado;
    }
    public function VerificarCPF($cpf)
    {
        $this->db->where('cpf', $cpf);
        $resultado = $this->db->get('Usuario')->row_array();
        return $resultado;
    }
    public function TelaHome()
    {
        $this->load->view('home');
    }
}
?>