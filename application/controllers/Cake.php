<?php 
 class Cake extends CI_Controller{
 	public function index(){
 		$data['query']=$this->db->get('cake');
 		$data['content']="admin/cakee";
 		$this->load->view('admin/tamplate',$data);
 	}
 	function tambah(){
			$data['content']='admin/add_cake';
			$this->load->view('admin/tamplate',$data);
		}
		function save(){
			$harga = $this->input->post("harga");
			$nama = $this->input->post("nama_cake");
			$des =   $this->input->post("deskripsi");

			$config = array(
				'upload_path'=> './upload/',
				'allowed_types'=> 'png|jpg|jpeg'
			);
			//echo "<script>alert('".$config['allowed_types']."')</script>";
			$this->load->library('upload',$config);

			if ($this->upload->do_upload('gambar')) {
			$data=array(
				'harga'=>$harga,
				'deskripsi'=>$des,
				'nama_cake'=>$nama,
				'gambar'=> $this->upload->data('file_name')
			);
			
						$this->db->insert('cake',$data);
						redirect('index.php/Cake');
						
				}else{
					echo $this->upload->display_errors();
				}
		}
		function edit($id){
			$data['query']=$this->db->get_where('cake',['cake_id'=>$id])->row();
			$data['content']='admin/edit_cake';
			$this->load->view('admin/tamplate',$data);
		}
		function update(){
			$id =$this->input->post("id");
			$harga = $this->input->post("harga");
			$nama = $this->input->post("nama_cake");
			$des =   $this->input->post("deskri psi");

			$config = array(
				'upload_path'=> './upload/',
				'allowed_types'=> 'png|jpg|jpeg'
			);
			//echo "<script>alert('".$config['allowed_types']."')</script>";
			$this->load->library('upload',$config);

			if ($this->upload->do_upload('gambar')) {
			$data=array(
				'harga'=>$harga,
				'deskripsi'=>$des,
				'nama_cake'=>$nama,
				'gambar'=> $this->upload->data('file_name')
			);
						$this->db->where('cake_id',$id);
						$this->db->update('cake',$data);
						redirect('index.php/Cake');
						
				}else{
					echo $this->upload->display_errors();
				}
		}
		function hapus($id){
			if($this->db->delete('cake',['cake_id'=>$id])){
				?>
				<script type="text/javascript">
					alert("Data Berhasil di hapus");
					window.location="<?php echo base_url('index.php/Cake'); ?>";
				</script>
				<?php
			}
		}
 }
 ?>