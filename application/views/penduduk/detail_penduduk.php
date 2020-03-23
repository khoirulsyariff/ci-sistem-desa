<div class="content-wrapper">
  <section class="content">
    <div class=" box box-info">
      <div class="box-header">
        <h4 style="text-align:center; margin-bottom: 30px"><b>DETAIL DATA PENDUDUK</b></h4><hr>
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
      <h4><b>Data Penduduk</b> </h4>
      <table class="table table-striped">
        <tr>
          <th> NIK </th>
          <td><?php echo $detail->nik; ?></td>
        </tr>
        <tr>
          <th> No Kartu Kekuarga </th>
          <td><?php echo $detail->no_kk; ?></td>
        </tr>
        <tr>
          <th>  Nama Lengkap </th>
          <td><?php echo $detail->nama ?> </td>
        </tr>
        <th> Tempat Lahir</th>
        <td><?php echo $detail->tempat_lahir; ?></td>
      </tr>
      <tr>
        <th> Tanggal Lahir </th>
        <td><?=date('d F Y', strtotime($detail->tanggal_lahir));?>
  </tr></td>
      </tr>
      <tr>
        <th> Jenis Kelamin </th>
        <td><?php echo $detail->jenis_kelamin; ?></td>
      </tr>
      <tr>
        <th> Alamat </th>
        <td><?php echo $detail->alamat; ?></td>
      </tr>
      <tr>
        <th> RT</th>
        <td><?php echo $detail->rt; ?></td>
      </tr>
      <tr>
        <th> RW </th>
        <td><?php echo $detail->rw; ?></td>
      </tr>
      <tr>
        <th> Agama</th>
        <td><?php echo $detail->agama; ?></td>
      </tr>
      <tr>
        <th> Pendidikan Terakhir</th>
        <td><?php echo $detail->pendidikan; ?></td>
      </tr>
      <tr>
        <th> Pekerjaan </th>
        <td><?php echo $detail->pekerjaan; ?></td>
      </tr>
      <tr>
        <th> Status Perkawinan</th>
        <td><?php echo $detail->status_perkawinan; ?></td>
      </tr>
      <tr>
        <th> Status Tinggal </th>
        <td><?php echo $detail->status; ?></td>
      </tr>
      <tr>
        <th> Golongan Darah </th>
        <td><?php echo $detail->golongan_darah; ?></td>
      </tr>
      <tr>
        <th> Kewarganegaraan </th>
        <td><?php echo $detail->kewarganegaraan; ?></td>
      </tr>
    </tr>
  </table>
</div>
</div>
<button onClick="goBack()".GoBack  class="btn btn-danger"> Kembali</button>
<script>
  function goBack() {
    window.history.back();
  }
</script>
</section>
</div>