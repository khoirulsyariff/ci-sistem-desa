<div class="content-wrapper">
    <section class="content">
        <div class="box box-info">
            <div class="box-header">


                <h4 style="text-align:center"><b>DATA SURAT KELAHIRAN</b></h4>
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
                <p>
                    <a href="<?php echo base_url('surat/surat_kelahiran/tambah'); ?>" class="btn btn-success">Tambah
                        Surat Kelahiran</a>
                </p>
                <table id="data" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr class="active">
                            <th style="text-align:center">No</th>
                            <th style="text-align:center">Nama Anak</th>

                            <th style="text-align:center">Jenis Kelamin</th>
                            <th style="text-align:center">Tempat/Tanggal Lahir</th>
                            <th style="text-align:center">Hubungan</th>
                            <th style="text-align:center">Aksi</th>
                        </tr>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($surat as $surat) {
                            $ibu = $this->db->query("SELECT * FROM penduduk WHERE nik='$surat->nik_ibu'")->row();
                            $pelapor = $this->db->query("SELECT * FROM penduduk WHERE nik='$surat->nik_pelapor'")->row();
                            ?>
                        <tr>
                            <td style="text-align:center"><?php echo $no; ?></td>
                            <td><?php echo $surat->nama_anak; ?></td>
                            <td><?php echo $surat->kelamin_anak; ?></td>
                            <td><?php echo $surat->tempat_lahir_anak; ?>/
                                <?= date('d F Y', strtotime($surat->tanggal_lahir_anak)); ?></td>
                            <td><?php echo $surat->hubungan_sebagai; ?></td>
                            <td style="text-align:center">
                                <a href="<?php echo base_url('surat/surat_kelahiran/edit/' . $surat->id_surat_kelahiran); ?>"
                                    class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Edit</a>
                                <a href="<?php echo base_url('surat/surat_kelahiran/hapus/' . $surat->id_surat_kelahiran); ?>"
                                    class="btn btn-danger btn-xs"
                                    onClick="return confirm('Yakin Akan Menghapus Data?');"><i
                                        class="fa fa-trash-o"></i> Hapus</a>
                                <a target="blank"
                                    href="<?php echo base_url('surat/surat_kelahiran/cetak/' . $surat->id_surat_kelahiran); ?>"
                                    class="btn btn-info btn-xs"><i class="fa fa-print"></i> Cetak</a>
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