<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prueba extends CI_Controller {
  public function index(){
    // $data['menu'] = main_menu();
		$this->load->view('prueba');
	}
}
