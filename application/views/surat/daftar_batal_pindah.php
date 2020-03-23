<div class="content-wrapper">
  <section class="content">
    <div class="box box-info">
      <div class="box-header">


        <h4 style="text-align:center"><b>DATA SURAT KETERANGAN BATAL PINDAH</b></h4><hr>
      </div>

      <div class="box-body table-responsive">

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
      <p>
        <a href="<?php echo base_url('surat/batal_pindah/tambah'); ?>" class="btn btn-success">Tambah Surat Keterangan Batal Pindah</a>
      </p>
	  <table id="data" class="table table-striped table-bordered" cellspacing="0"  width="100%" >
        <thead>
          <tr class="active">
            <th style="text-align:center">No</th>
            <th style="text-align:center">NIK</th>
            <th style="text-align:center">Nama</th>
            <th style="text-align:center">Alamat Batal Pindah</th>
            <th style="text-align:center">Tanda Tangan</th>
            <th style="text-align:center">Aksi</th>
          </tr>
        </tr>
      </thead>
      <tbody>
        <?php
$no = 1;
foreach ($surat as $surat) {
	?>
         <tr>
          <td style="text-align:center"><?php echo $no; ?></td>
          <td><?php echo $surat->nik; ?></td>
          <td><?php echo $surat->nama; ?></td>
          <td><?php echo $surat->alamat_batal_pindah; ?></td>
          <td><?php echo $surat->nama_pejabat; ?></td>
          <td style="text-align:center">
            <a  href="<?php echo base_url('surat/batal_pindah/edit/' . $surat->id_batal_pindah); ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Edit</a>
            <a href="<?php echo base_url('surat/batal_pindah/hapus/' . $surat->id_batal_pindah); ?>"  class="btn btn-danger btn-xs" onClick="return confirm('Yakin Akan Menghapus Data?');"><i class="fa fa-trash-o"></i> Hapus</a>
            <a href="<?php echo base_url('surat/batal_pindah/cetak/' . $surat->id_batal_pindah); ?>" class="btn btn-info btn-xs"><i class="fa fa-print"></i> Cetak</a>
          </tr>
        </td>
      <?php
$no++;
}
?>
  </tbody>
</table>
</div>
</section>
</div>
