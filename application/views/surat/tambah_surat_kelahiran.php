<div class="content-wrapper">
    <section class="content">
        <div class="box box-info">
            <div class="box-header">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <h4 style="text-align:center"><b>TAMBAH SURAT KELAHIRAN</b></h4>
                                <hr>
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

                                <form action="<?php echo base_url('surat/surat_kelahiran/tambah'); ?>" method="post">

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>NIK Ayah</label><a href="<?php echo base_url(); ?>penduduk/tambah/"
                                                class="btn btn-sm btn-primary pull-right">Tambah
                                                Penduduk</a><br /><br />
                                            <select name="ayah" class="form-control" id="nama" required>
                                                <?php
                                                foreach ($penduduk as $penduduk) :
                                                    ?>
                                                <option value="<?php echo $penduduk->nik; ?>">
                                                    <?php echo $penduduk->nik; ?> - <?php echo $penduduk->nama; ?>
                                                </option>
                                                <?php
                                                endforeach;
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>NIK Ibu</label>
                                            <select name="ibu" class="form-control" id="nik" required>
                                                <?php
                                                foreach ($pendudukk as $pendudukk) :
                                                    ?>
                                                <option value="<?php echo $pendudukk->nik; ?>">
                                                    <?php echo $pendudukk->nik; ?> - <?php echo $pendudukk->nama; ?>
                                                </option>
                                                <?php
                                                endforeach;
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>NIK Pelapor</label>
                                            <select name="pelapor" class="form-control" id="nik2" required>
                                                <?php
                                                foreach ($pendudukkk as $pendudukkk) :
                                                    ?>
                                                <option value="<?php echo $pendudukkk->nik; ?>">
                                                    <?php echo $pendudukkk->nik; ?> - <?php echo $pendudukkk->nama; ?>
                                                </option>
                                                <?php
                                                endforeach;
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Anak</label>
                                            <input type="text" name="nama" class="form-control" placeholder="Nama Anak"
                                                required />
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin Anak</label>
                                            <select name="kelamin" class="form-control" required>
                                                <option value="Laki-Laki">Laki-Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tempat Tanggal Lahir</label>
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <input type="text" name="tempat" class="form-control"
                                                        placeholder=".Tempat">
                                                </div>
                                                <div class="col-xs-4">
                                                    <select name="hari" class="form-control" required>
                                                        <option value="" selected disabled>- pilih -</option>
                                                        <option value="Senin">Senin</option>
                                                        <option value="Selasa">Selasa</option>
                                                        <option value="Rabu">Rabu</option>
                                                        <option value="Kamis">Kamis</option>
                                                        <option value="Jumat">Jumat</option>
                                                        <option value="Sabtu">Sabtu</option>
                                                        <option value="Minggu">Minggu</option>
                                                    </select>
                                                </div>
                                                <div class="col-xs-5">
                                                    <div class="input-group date">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                        <input type="date" name="tanggal"
                                                            class="form-control pull-right">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bootstrap-timepicker">
                                            <div class="form-group">
                                                <label>Pukul</label>
                                                <div class="input-group">
                                                    <input type="time" name="jam" id="pukul"
                                                        class="form-control timepicker" required>
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-clock-o"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Hubungan Sebagai</label>
                                                <input type="text" name="hubungan" class="form-control"
                                                    placeholder="Hubungan Sebagai" required />
                                            </div>
                                            <div class="form-group">
                                                <label>Tanda Tangan</label>
                                                <select name="pejabat" class="form-control" required>
                                                    <?php
                                                    foreach ($pejabat as $data_pejabat) :
                                                        ?>
                                                    <option value="<?php echo $data_pejabat->id_pejabat; ?>">
                                                        <?php echo $data_pejabat->nama_pejabat; ?></option>
                                                    <?php
                                                    endforeach;
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" name="tambah_surat_kelahiran"
                                                    class="btn btn-success" value="Simpan">
                                                <a href="<?php echo base_url('surat/surat_kelahiran/'); ?>"
                                                    class="btn btn-danger">Batal</a>
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