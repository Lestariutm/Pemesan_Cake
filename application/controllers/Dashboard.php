<?php 
	class Dashboard extends CI_Controller{
		public function index(){
			$data['content']="admin/home";
			$this->load->view('admin/tamplate',$data);
		}
	}
 ?>