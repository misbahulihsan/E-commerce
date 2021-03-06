<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
	public function __construct(){
		parent::__construct();		
		$this->load->library('template_front');
		$this->load->model('home_model');
	}
	
	public function index() {
		$data['listMainMenu'] = $this->home_model->select_main_menu()->result();
		$this->template_front->display('home_v', $data);
	}	
}
/* Location: ./application/controller/Home.php */
?>