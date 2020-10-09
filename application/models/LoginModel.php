<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

    public function LoginUsuario($email, $senha)
    {
         $this->db->where("email", $email);
         $this->db->or_where('username', $email);
         $this->db->where('username', $senha);

        $resultado = $this->db->get('Usuario')->row_array();

        return $resultado = "oi";
    }
  
}
?>