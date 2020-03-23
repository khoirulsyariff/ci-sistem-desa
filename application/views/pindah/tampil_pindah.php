<div class="content-wrapper">
    <section class="content">
        <div class="box box-info">
            <div class="box-header">


                <h4 style="text-align:center"><b>DATA PINDAH DESA</b></h4>
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
                    <a href="<?php echo base_url('pindah/tambah'); ?>" class="btn btn-success">Tambah Data Pindah</a>
                    <a href="<?php echo base_url('#'); ?>" target="_blank">
                    </a>
                </p>
                <table id="data" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr class="active">
                            <th style="text-align:center">No</th>
                            <th style="text-align:center">Nomor Induk Kependudukan</th>
                            <th style="text-align:center">Nama Lengkap</th>
                            <th style="text-align:center">Alamat</th>
                            <th style="text-align:center">Alamat Tujuan</th>
                            <th style="text-align:center">Aksi</th>
                        </tr>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($pindah as $pindah) {
                            ?>
                        <tr>
                            <td style="text-align:center"><?php echo $no; ?></td>
                            <td><?php echo $pindah->nik; ?></td>
                            <td><?php echo $pindah->nama; ?></td>
                            <td><?php echo $pindah->alamat; ?></td>
                            <td><?php echo $pindah->alamat_tujuan; ?></td>
                            <td style="text-align:center">
                                <a href="<?php echo base_url('pindah/edit/' . $pindah->nik); ?>"
                                    class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Edit</a>
                                <a href="<?php echo base_url('pindah/hapus/' . $pindah->nik); ?>"
                                    class="btn btn-danger btn-xs"
                                    onClick="return confirm('Yakin Akan Menghapus Data?');"><i
                                        class="fa fa-trash-o"></i> Hapus</a>
                                <a href="<?php echo base_url('pindah/detail/' . $pindah->nik); ?>"
                                    class="btn btn-info btn-xs"><i class="fa fa-info-circle"></i> Detail</a>
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