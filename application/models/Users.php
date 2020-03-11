<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Model{
  function __construct(){
    $this->load->database();
  }

  public function create($datos){
    $datos = array(
      'nombre' => $datos['nombre'],
      'correo' => $datos['correo'],
      'contraseña' => $datos['contraseña']
    );
    if (!$this->db->insert('usuarios', $datos)) {
      return false;//Si no se ingresaron los datos retornara falso
    }
      return true;//Si se ingresaron los datos retornara verdadero
  }
}
