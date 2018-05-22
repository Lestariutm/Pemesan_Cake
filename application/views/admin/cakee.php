<div class="col-lg-12">
	<h1 class="page-header">POST CAKE</h1>
</div>
<div class="row">
	<div class="col-md-4">
		<div class="input-group custom-search-form-right">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
					</div>
				</div>
				<br>
				<a href="<?php echo base_url().'index.php/Cake/tambah'; ?>" class="btn btn-warning" style="margin-left: 800px;"><i class="fa fa-plus"></i> ADD_CAKE</a>
				<br>
				<br>
				<table id="#" class="table table-bordered">
                  <thead class="table-danger">
                    <th style="text-align: center;">No.</th>
                    <th style="text-align: center;">cake_id</th>
                    <th style="text-align: center;">Nama Cake</th>
                    <th style="text-align: center;">Gambar</th>
                    <th style="text-align: center;">Harga</th>
                    <th style="text-align: center;">Aksi</th>
                  </thead>
                  <tbody style="text-align: center;" class="table-info">
                    <?php 
                    if ($query->num_rows()>0) {
                     $no=0; 
                    foreach ($query->result() as $row) {
                    $no++;
                    echo'
                    <tr>
                    <td>'.$no.'</td>
                    <td>'.$row->cake_id.'</td>
                    <td>'.$row->nama_cake.'</td>
                    <td><img style="width:50px; height:50px; border-radius:100%;" src="'.base_url("upload/".$row->gambar).'"></td>
                    <td>'.$row->harga.'</td>
                    <td><a href="'.base_url('Cake/edit/'.$row->cake_id).'" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a>
                    	<a href="'.base_url('Cake/hapus/'.$row->cake_id).'" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                    </tr>';
                      }
                    } 

                    ?>
                  </tbody>
                </table>
