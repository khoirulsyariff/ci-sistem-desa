<div class="content-wrapper">
  <section class="content">
    <div class=" box box-info">
      <div class="box-header">
        <h4 style="text-align:center; margin-bottom: 30px"><b>DETAIL DATA KEMATIAN</b></h4><hr>
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
      <h4><b>Data Kematian</b> </h4>
      <table class="table table-striped">
        <tr>
          <th>  NIK </th>
          <td><?php echo $detail->nik ?> </td>
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
        <td><?php echo $detail->tanggal_lahir; ?></td>
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
        <th> Hari Wafat </th>
        <td><?php echo $detail->hari_wafat; ?></td>
      </tr>
      <tr>
        <th> Tanggal Wafat </th>
        <td><?php echo $detail->tanggal_wafat; ?></td>
      </tr>
      <tr>
        <th> Keterangan </th>
        <td><?php echo $detail->keterangan; ?></td>
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