<div class="col-lg-12">
	<h1 class="page-header">Data Petugas</h1>
</div>
<button onclick="add()" class="btn btn-warning">
	<i class="fa fa-plus"></i> Petugas
</button>
<br>
<br>
<style type="text/css">
	th{
		text-align: center;
	}
</style>
<table class="table" style="text-align: center;">
	<thead>
		<th>No</th>
		<th>Id_Pegawai</th>
		<th>Nama Lengkap</th>
		<th>Alamat</th>
		<th>Telpon</th>
		<th>Aksi</th>
	</thead>
	<tbody>
		<td>1</td>
		<td>2</td>
		<td>Melina</td>
		<td>Panglejar</td>
		<td>09808978798</td>
		<td><button class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></button>
                    	<button class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
	</tbody>
</table>

<script type="text/javascript">
      $(document).ready(function(){
        $('#table_id').DataTable();
      });

      var save_method;
      var table;

      function add(){
        save_method = 'add';
        $('#form')[0].reset();
        $('#modal_petugas').modal('show');
      }

    </script>
<div class="modal fade" id="modal_petugas" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <h4 class="modal-title" style="text-align: center;">Isi Data Dibawah:</h4>
          <div class="modal-body form">
            <form action="#" id="form">
                <input type="hidden" name="id_pegawai" placeholder="Id_Pegawai" class="form-control"><br>
                <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap"><br>
                <textarea class="form-control" name="alamat" placeholder="Alamat" rows="3"></textarea><br>
                <input type="number" name="telpon" class="form-control" placeholder="No Telpon"><br>
                <input type="text" name="username" class="form-control" placeholder="User Name"><br>
                <input type="password" name="pass" class="form-control" placeholder="Password"><br>
                <select class="form-control">
                	<option>---Level---</option>
                	<option>Admin</option>
                	<option>User</option>
                </select>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Simpan</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          </div>
          </div>
    </div>
