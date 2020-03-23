<div class="content-wrapper">
  <section class="content">
    <div class="box box-info">
      <div class="box-header">
        <h4 style="text-align:center;"><b>DATA KELAHIRAN DESA</b></h4><hr>
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

      <table id="data" class="table table-bordered" width="100%" cellspacing="0" >
        <thead>
          <tr class="active">
            <th style="text-align:center">No</th>
            <th style="text-align:center">Nama</th>
            <th style="text-align:center">Tanggal Lahir</th>
            <th style="text-align:center">Jenis Kelamin</th>
            <th style="text-align:center">Alamat</th>
            <th style="text-align:center">Nama Ayah</th>
            <th style="text-align:center">Nama Ibu</th>

            <th style="text-align:center">Aksi</th>
          </tr>
        </tr>
      </thead>
      <tbody>
        <?php
$no = 1;
foreach ($kelahiran as $kelahiran) {
	?>
         <tr>
          <td style="text-align:center"><?php echo $no; ?></td>
          <td><?php echo $kelahiran->nama; ?></td>
            <td><?=date('d F Y', strtotime($kelahiran->tanggal_lahir));?></td>
            <td><?php echo $kelahiran->jenis_kelamin; ?></td>
            <td><?php echo $kelahiran->alamat; ?></td>
            <td><?php echo $kelahiran->nama_ayah; ?></td>
            <td><?php echo $kelahiran->nama_ibu; ?></td>
            <td style="text-align:center">
            <a href="<?php echo base_url('kelahiran/detail/' . $kelahiran->id_kelahiran); ?>" class="btn btn-info btn-xs"><i class="fa fa-info-circle"></i> Detail</a>
          </td>
          </tr>

          <?php
$no++;
}
?>
      </tbody>
    </table>
  </div>
</section>
</div>