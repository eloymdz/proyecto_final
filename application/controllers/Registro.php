<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

	public function __construct(){
    parent::__construct();
    $this->load->helper(array('getmenu'));
		$this->load->database();
		$this->load->model('Users');
		$this->load->library(array('form_validation'));
  }

	public function index(){
    $data['menu'] = main_menu();
		$this->load->view('registro', $data);
		$query = $this->db->get('usuarios');
	}

	public function create(){
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$password_c = $this->input->post('password_confirm');

		$config = array(
      array(
              'field' => 'username',
              'label' => 'Nombre de usuario',
              'rules' => 'required|alpha_numeric'
      ),
      array(
              'field' => 'email',
              'label' => 'correo',
              'rules' => 'required|valid_email',
              'errors' => array(
                      'required' => 'El %s es invalido.',
              ),
      )
		);

		$this->form_validation->set_rules($config);

		//Para poder correr o ejecutar las reglas
		if ($this->form_validation->run() == FALSE){// Si las reglas no se cumplen volvera a cargar la vista registro
			$data['menu'] = main_menu();
			$this->load->view('registro',$data);
    }else{// Si las reglas se cumplen procede a realizar el registro
			$datos = array(
				'nombre' => $username,
				'correo' => $email,
				'contraseña' => $password
			);
			$data['menu'] = main_menu();
			if (!$this->Users->create($datos)) { //Si regresa falso, que vuelva a recarga la vista
				$data['msg'] = 'Ocurrio un error!';
				$this->load->view('registro', $data);
			}
			$data['msg'] = 'Registrado correctamente';
			$this->load->view('registro', $data);
		}
	}
}
