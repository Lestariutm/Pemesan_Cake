<div class="col-lg-12">
	<h1 class="page-header">Data Transaksi</h1>
</div>
<button onclick="add_tunai()" class="btn btn-danger">
	Penarikan Tunai
</button> <br><br>
<style type="text/css">
	th,td{
		text-align: center;
	}
</style>
		<table class="table">
			<thead>
				<th>Tipe</th>
				<th>Tanggal</th>
				<th>No.Transaksi</th>
				<th>Nasabah</th>
				<th>Debit</th>
				<th>Kredit</th>
				<th>Saldo</th>
			</thead>
			<tbody>
				
			</tbody>
		</table>
		
<script type="text/javascript">
      $(document).ready(function(){
        $('#table_id').DataTable();
      });

      var save_method;
      var table;

      function add_tunai(){
        save_method = 'add';
        $('#form')[0].reset();
        $('#modal_tunai').modal('show');
      }

    </script>
<div class="modal fade" id="modal_tunai" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <h4 class="modal-title" style="text-align: center;">Penarikan Tunai</h4>
          <div class="modal-body form">
            <form action="#" id="form">
                <input type="number" name="no_rekening" placeholder="Tulis No Rekening" class="form-control"><br>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Cari</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          </div>
          </div>
    </div>