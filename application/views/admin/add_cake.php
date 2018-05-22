<div class="col-lg-12">
	<h1 class="page-header">POST CAKE</h1>
</div>
<div class="row">
	<div class="col-md-4">
		<div class="input-group custom-search-form-right">
                            <form action="<?php echo base_url('index.php/Cake/save'); ?>" method="POST" enctype="multipart/form-data">
                                <label>Nama Cake</label><br>
                                <input type="text" name="nama_cake" class="form-control" placeholder="Nama_cake">
                                <label>Gambar</label><br>
                                <input type="file" name="gambar" class="form-control" >
                                <label>Deskripsi Cake</label><br>
                                <textarea cols="6" class="form-control" name="deskripsi" placeholder="Masukan Deskripsi Cake.."></textarea>
                                <label>Harga</label><br>
                                <input type="number" name="harga" class="form-control" placeholder="Harga">
                                <br><br><br>
                                <button class="btn btn-primary">SIMPAN</button>
                            </form>
                        </div>
					</div>
				</div>
				<br>
				