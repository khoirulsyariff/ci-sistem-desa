<div class="content-wrapper">
  <section class="content">
    <div class="box box-info">
      <div class="box-header">
        <h4 style="text-align:center"><b>EDIT PENGATURAN</b></h4><hr>
      </div>

      <div class="box-body">

        <?php
if ($this->session->flashdata('sukses')) {
	?>
         <div class="callout callout-success">
          <p style="font-size:14px">
            <i class="fa fa-check"></i> <?php echo $this->session->flashdata('sukses'); ?>
          </p>
        </div>
        <?php
}
?>
      <form action="<?php echo base_url('pengaturan/proses_edit'); ?>" method="post">
        <div class="form-group">
          <label>Nama</label>
          <input type="hidden" name="id" value="<?php echo $pengaturan->id_pejabat; ?>"  class="form-control" />
          <input type="text" name="nama" value="<?php echo $pengaturan->nama_pejabat; ?>"  class="form-control" />
        </div>
        <div class="form-group">
          <label>NIP</label>
          <input type="text" name="nip" value="<?php echo $pengaturan->nip_pejabat; ?>"  class="form-control" />
        </div>
        <div class="form-group">
          <label>Jabatan</label>
		  <select name="jabatan" class="form-control">
			<option value="Kepala Desa" <?php if($pengaturan->jabatan_pejabat == "Kepala Desa"){ echo "selected"; } ?>>Kepala Desa</option>
			<option value="Sekertaris Desa" <?php if($pengaturan->jabatan_pejabat == "Sekertaris Desa"){ echo "selected"; } ?>>Sekertaris Desa</option>
			<option value="Kaur Pemerintahan" <?php if($pengaturan->jabatan_pejabat == "Kaur Pemerintahan"){ echo "selected"; } ?>>Kaur Pemerintahan</option>
		  </select>
        </div>
        <div class="form-group">
          <button class="btn btn-success">Simpan</button>
          <a href="<?php echo base_url('pengaturan/tampil'); ?>" class="btn btn-danger">Batal</a>
        </div>
      </form>
    </div>
  </div>
</section>
</div>
