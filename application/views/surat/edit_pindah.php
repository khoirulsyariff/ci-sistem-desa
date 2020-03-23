<div class="content-wrapper">
  <section class="content">
    <div class="box box-info">
      <div class="box-header">

        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <h4 style="text-align:center"><b>EDIT SURAT PINDAH</b></h4><hr>
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

              <form action="<?php echo base_url('surat/pindah/edit'); ?>" method="post">

                <div class="card-body">
                  <div class="form-group">
                    <label>NIK Kepala Keluarga</label>
                      <input type="hidden" name="id" class="form-control" required  value="<?php echo $pindah->id_pindah; ?>"/>
					  <select name="nik_kepala" class="form-control" required>
						<?php
						foreach($penduduk as $penduduk):
						if($penduduk->nik == $pindah->nik_kepala_keluarga)
						{
						?>
							<option value="<?php echo $penduduk->nik; ?>" selected><?php echo $penduduk->nik; ?> - <?php echo $penduduk->nama; ?></option>
						<?php
						}
						else
						{
						?>
						<option value="<?php echo $penduduk->nik; ?>"><?php echo $penduduk->nik; ?> - <?php echo $penduduk->nama; ?></option>
						<?php
						}
						endforeach;
						?>
					  </select>
                  </div>
                  <div class="form-group">
                    <label>NIK Pemohon</label>
                      <select name="nik_pemohon" class="form-control" required>
						<?php
						foreach($pendudukk as $pendudukk):
						if($pendudukk->nik == $pindah->nik_pemohon)
						{
						?>
							<option value="<?php echo $pendudukk->nik; ?>" selected><?php echo $pendudukk->nik; ?> - <?php echo $pendudukk->nama; ?></option>
						<?php
						}
						else
						{
						?>
						<option value="<?php echo $pendudukk->nik; ?>"><?php echo $pendudukk->nik; ?> - <?php echo $pendudukk->nama; ?></option>
						<?php
						}
						endforeach;
						?>
					  </select>
                  </div>
                  <div class="form-group">
                    <label>Alasan Pindah</label>
                      <select name="alasan" class="form-control" required>
						<option value="Pekerjaan" <?php if($pindah->alasan_pindah == "Pekerjaan"){ echo "selected"; } ?>>Pekerjaan</option>
						<option value="Pendidikan" <?php if($pindah->alasan_pindah == "Pendidikan"){ echo "selected"; } ?>>Pendidikan</option>
						<option value="Keamanan" <?php if($pindah->alasan_pindah == "Keamanan"){ echo "selected"; } ?>>Keamanan</option>
						<option value="Kesehatan" <?php if($pindah->alasan_pindah == "Kesehatan"){ echo "selected"; } ?>>Kesehatan</option>
						<option value="Perumahan" <?php if($pindah->alasan_pindah == "Perumahan"){ echo "selected"; } ?>>Perumahan</option>
						<option value="Keluarga" <?php if($pindah->alasan_pindah == "Keluarga"){ echo "selected"; } ?>>Keluarga</option>
						<option value="Lainnya" <?php if($pindah->alasan_pindah == "Lainnya"){ echo "selected"; } ?>>Lainnya</option>
					  </select>
                  </div>

                  <div class="form-group">
                    <label>Alamat Tujuan</label>
                    <textarea name="alamat" class="form-control" placeholder="Alamat Tujuan" required><?php echo $pindah->alamat_pindah; ?></textarea>
                  </div>

                  <div class="form-group">
                    <label>RT</label>
                    <input type="text" name="rt" class="form-control" placeholder="RT" required value="<?php echo $pindah->rt_pindah; ?>"/>
                  </div>
                  <div class="form-group">
                    <label>RW</label>
                    <input type="text" name="rw" class="form-control" placeholder="RW" required  value="<?php echo $pindah->rw_pindah; ?>"/>
                  </div>
                  <div class="form-group">
                    <label>Dusun</label>
                    <input type="text" name="dusun" class="form-control" placeholder="Dusun" required  value="<?php echo $pindah->dusun_pindah; ?>"/>
                  </div>
                  <div class="form-group">
                    <label>Desa</label>
                    <input type="text" name="desa" class="form-control" placeholder="Desa" required  value="<?php echo $pindah->desa_pindah; ?>"/>
                  </div>
                  <div class="form-group">
                    <label>Kecamatan</label>
                    <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan" required  value="<?php echo $pindah->kecamatan_pindah; ?>"/>
                  </div>
                  <div class="form-group">
                    <label>Kabupaten</label>
                    <input type="text" name="kabupaten" class="form-control" placeholder="Kabupaten" required  value="<?php echo $pindah->kabupaten_pindah; ?>"/>
                  </div>
                  <div class="form-group">
                    <label>Provinsi</label>
                    <input type="text" name="provinsi" class="form-control" placeholder="Provinsi" required  value="<?php echo $pindah->provinsi_pindah; ?>"/>
                  </div>
                  <div class="form-group">
                    <label>Kode Pos</label>
                    <input type="text" name="kode_pos" class="form-control" placeholder="Kode Pos" required  value="<?php echo $pindah->kode_pos_pindah; ?>"/>
                  </div>
                  <div class="form-group">
                    <label>Telepon</label>
                    <input type="text" name="telepon" class="form-control" placeholder="Telepon" required  value="<?php echo $pindah->telepon_pindah; ?>"/>
                  </div>
                  <div class="form-group">
                    <label>Tanda Tangan</label>
                      <select name="pejabat" class="form-control" required>
						<?php
						foreach($pejabat as $pejabat):
						if($pejabat->id_pejabat == $pindah->id_pejabat)
						{
						?>
						<option value="<?php echo $pejabat->id_pejabat; ?>"><?php echo $pejabat->nama_pejabat; ?></option>
						<?php
						}
						else
						{
						?>
						<option value="<?php echo $pejabat->id_pejabat; ?>"><?php echo $pejabat->nama_pejabat; ?></option>
						<?php
						}
						endforeach;
						?>
					  </select>
                  </div>
                  <div class="form-group">
                    <input type="submit" name="edit_pindah" class="btn btn-success" value="Simpan">
                    <a href="<?php echo base_url('surat/pindah/'); ?>" class="btn btn-danger">Batal</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
</div>
