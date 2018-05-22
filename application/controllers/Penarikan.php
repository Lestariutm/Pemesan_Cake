<?php 
	class Penarikan extends CI_Controller{
		public function index(){
			$data['content']='penarikan';
			$this->load->view('tamplate',$data);
		}
	}
 ?>