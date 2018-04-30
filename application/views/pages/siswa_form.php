<?php
	if ($query == NULL) {
		$title = "Tambah";
	}else{
		$title = "Edit";

	}
	
?> 
<div class="card card-default" style="border-radius: 0px; margin: 20px 0;">
	<div class="card-header"><?php echo $title; ?> Data Pasien</div>
	<div class="card-body">
		<?php echo anchor ('siswa','kembali','class="btn btn-secondary"
		style="margin: 0 5px; margin-bottom: 5px;"'); ?> 
		<hr/> 
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<form method="post" action="simpan">
					<div class="form-group"> 
						<label>TANGGAL</label>
						<input type="text" name="tanggal_pasien"
						class="form-control" placeholder=".."> 
						
					</div>

					<div class="form-group">
						<label>NAMA</label>
						<input type="text" name="nama_pasien"
						class="form-control" placeholder="...">
					</div>

					<div class="form-group"> 
						<label>KELAS PASIEN</label>
						<input type="text" name="kelas_pasien"
						class="form-control" placeholder="..."> 
					</div>

					

					<div class="form-group">
						<label>KELUHAN PASIEN</label>
						<input type="text" name="keluhan_pasien"
						class="form-control" placeholder="...">
					</div>


					
					
					</div>

						<button type="submit" class="btn btn-primary mb-2"> Simpan </button>
					</form>
				</div>
				<div class="col-md-3"></div>
			</div>
			</div>