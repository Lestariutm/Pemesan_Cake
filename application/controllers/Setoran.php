<?php 
	class Setoran extends CI_Controller{
		public function index(){
			$data['content']='penyetoran';
			$this->load->view('tamplate',$data);
		}
	}
 ?>