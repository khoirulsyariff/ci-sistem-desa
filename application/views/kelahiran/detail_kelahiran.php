<div class="content-wrapper">
    <section class="content">
        <div class=" box box-info">
            <div class="box-header">
                <h4 style="text-align:center; margin-bottom: 30px"><b>DETAIL DATA KELAHIRAN</b></h4>
                <hr>
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
                <h4><b>Data Kelahiran</b> </h4>
                <table class="table table-striped">
                    <tr>
                        <th> Nama Lengkap </th>
                        <td><?php echo $detail->nama ?> </td>
                    </tr>
                    <tr>
                        <th> Hari </th>
                        <td><?php echo $detail->hari ?> </td>
                    </tr>
                    <th> Tempat Lahir</th>
                    <td><?php echo $detail->tempat_lahir; ?></td>
                    </tr>
                    <tr>
                        <th> Tanggal Lahir </th>
                        <td><?php echo $detail->tanggal_lahir; ?></td>
                    </tr>
                    <tr>
                        <th> Pukul </th>
                        <td><?php echo $detail->pukul ?> </td>
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
                        <th> Nama Ayah </th>
                        <td><?php echo $detail->nama_ayah; ?></td>
                    </tr>
                    <tr>
                        <th> Pekerjaan Ayah </th>
                        <td><?php echo $detail->pekerjaan_ayah; ?></td>
                    </tr>
                    <tr>
                        <th> Nama Ibu </th>
                        <td><?php echo $detail->nama_ibu; ?></td>
                    </tr>
                    <tr>
                        <th> Pekerjaan Ibu </th>
                        <td><?php echo $detail->pekerjaan_ibu; ?></td>
                    </tr>

                    </tr>
                </table>
            </div>
        </div>

        <button onClick="goBack()" .GoBack class="btn btn-danger"> Kembali</button>
        <script>
        function goBack() {
            window.history.back();
        }
        </script>
    </section>
</div>