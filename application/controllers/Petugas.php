<?php 
	class Petugas extends CI_Controller{
		public function index(){
			$data['content']='petugas';
			$this->load->view('tamplate',$data);
		}
	}
 ?>