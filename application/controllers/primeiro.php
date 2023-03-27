<?php
defined('BASEPATH') OR exit('nao e oernitido asseso direto !');

class primeiro extends CI_Controller {

	public function index(){
		$this->load->view('inicio');
        $this->load->helper('url');
	}
    public function conta(){
		$this->load->view('novo');
        $this->load->helper('url');
	}
	public function telaprimaria(){
		$this->load->view('tela');
		$this->load->header('url');
	}
	public function mais(){
		$this->load->view('sobre');
	}

}