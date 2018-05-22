<div class="col-lg-12">
	<h1 class="page-header">EDIT CAKE</h1>
</div>
<div class="row">
	<div class="col-md-4">
		<div class="input-group custom-search-form-right">
                            <form action="<?php echo base_url('index.php/Cake/update'); ?>" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id">
                                <label>Nama Cake</label><br>
                                <input type="text" value="<?php echo $query->nama_cake; ?>" name="nama_cake" class="form-control" placeholder="Nama_cake">
                                <label>Gambar</label><br>
                                <input type="file" name="gambar" class="form-control" >
                                <label>Deskripsi Cake</label><br>
                                <textarea cols="6" class="form-control" name="deskripsi" placeholder="Masukan Deskripsi Cake.."><?php echo $query->deskripsi; ?></textarea>
                                <label>Harga</label><br>
                                <input type="number" name="harga" value="<?php echo $query->harga; ?>" class="form-control" placeholder="Harga">
                                <br><br><br>
                                <button class="btn btn-primary">EDIT</button>
                            </form>
                        </div>
					</div>
				</div>
				<br>
				