<?php 
	class Setoran_tunai extends CI_Controller{
		public function index(){
			$data['content']='setoran_tunai';
			$this->load->view('tamplate',$data);
		}
	}
 ?>