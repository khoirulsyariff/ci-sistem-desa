<div class="content-wrapper">
    <section class="content">
        <div class="box box-info">
            <div class="box-header">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <h4 style="text-align:center"><b>EDIT SURAT KELAHIRAN</b></h4>
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

                                <form action="<?php echo base_url('surat/surat_kelahiran/edit'); ?>" method="post">

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>NIK Ayah</label>
                                            <input type="hidden" name="id" class="form-control" required
                                                value="<?php echo $surat_kelahiran->id_surat_kelahiran; ?>" />
                                            <select name="ayah" class="form-control" id="nama" required>
                                                <?php
                                                foreach ($penduduk as $penduduk) :
                                                    if ($penduduk->nik == $surat_kelahiran->nik_ayah) {
                                                        ?>
                                                <option value="<?php echo $penduduk->nik; ?>" selected>
                                                    <?php echo $penduduk->nik; ?> - <?php echo $penduduk->nama; ?>
                                                </option>
                                                <?php
                                                        } else {
                                                            ?>
                                                <option value="<?php echo $penduduk->nik; ?>">
                                                    <?php echo $penduduk->nik; ?> - <?php echo $penduduk->nama; ?>
                                                </option>
                                                <?php
                                                    }
                                                endforeach;
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>NIK Ibu</label>
                                            <select name="ibu" class="form-control" id="nama" required>
                                                <?php
                                                foreach ($pendudukk as $pendudukk) :
                                                    if ($pendudukk->nik == $surat_kelahiran->nik_ibu) {
                                                        ?>
                                                <option value="<?php echo $pendudukk->nik; ?>" selected>
                                                    <?php echo $pendudukk->nik; ?> - <?php echo $pendudukk->nama; ?>
                                                </option>
                                                <?php
                                                        } else {
                                                            ?>
                                                <option value="<?php echo $pendudukk->nik; ?>">
                                                    <?php echo $pendudukk->nik; ?> - <?php echo $pendudukk->nama; ?>
                                                </option>
                                                <?php
                                                    }
                                                endforeach;
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>NIK Pelapor</label>
                                            <select name="pelapor" class="form-control" id="nama" required>
                                                <?php
                                                foreach ($pendudukkk as $pendudukkk) :
                                                    if ($pendudukkk->nik == $surat_kelahiran->nik_pelapor) {
                                                        ?>
                                                <option value="<?php echo $pendudukkk->nik; ?>" selected>
                                                    <?php echo $pendudukkk->nik; ?> - <?php echo $pendudukkk->nama; ?>
                                                </option>
                                                <?php
                                                        } else {
                                                            ?>
                                                <option value="<?php echo $pendudukkk->nik; ?>">
                                                    <?php echo $pendudukkk->nik; ?> - <?php echo $pendudukkk->nama; ?>
                                                </option>
                                                <?php
                                                    }
                                                endforeach;
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Anak</label>
                                            <input type="text" name="nama" class="form-control" placeholder="Nama Anak"
                                                required value="<?php echo $surat_kelahiran->nama_anak; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin Anak</label>
                                            <select name="kelamin" class="form-control" required>
                                                <option value="Laki-Laki" <?php if ($surat_kelahiran->kelamin_anak == "Laki-Laki") {
                                                                                echo "selected";
                                                                            } ?>>Laki-Laki</option>
                                                <option value="Perempuan" <?php if ($surat_kelahiran->kelamin_anak == "Perempuan") {
                                                                                echo "selected";
                                                                            } ?>>Perempuan</option>
                                            </select>
                                        </div>



                                        <div class="form-group"></div>
                                        <label>Tempat Tanggal Lahir</label>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <input type="text" name="tempat"
                                                    value="<?php echo $surat_kelahiran->tempat_lahir_anak; ?>"
                                                    class="form-control" placeholder="Tempat">
                                            </div>
                                            <div class="col-xs-4">
                                                <select name="hari" class="form-control" required>
                                                    <option value="Senin"
                                                        <?php if ($surat_kelahiran->hari_lahir_anak == "Senin") echo "selected"; ?>>
                                                        Senin
                                                    </option>
                                                    <option value="Selasa"
                                                        <?php if ($surat_kelahiran->hari_lahir_anak == "Selasa") echo "selected"; ?>>
                                                        Selasa
                                                    </option>
                                                    <option value="Rabu"
                                                        <?php if ($surat_kelahiran->hari_lahir_anak == "Rabu") echo "selected"; ?>>
                                                        Rabu
                                                    </option>
                                                    <option value="Kamis"
                                                        <?php if ($surat_kelahiran->hari_lahir_anak == "Kamis") echo "selected"; ?>>
                                                        Kamis
                                                    </option>
                                                    <option value="Jumat"
                                                        <?php if ($surat_kelahiran->hari_lahir_anak == "Jumat") echo "selected"; ?>>
                                                        jumat
                                                    </option>
                                                    <option value="Sabtu"
                                                        <?php if ($surat_kelahiran->hari_lahir_anak == "Sabtu") echo "selected"; ?>>
                                                        Sabtu
                                                    </option>
                                                    <option value="Minggu"
                                                        <?php if ($surat_kelahiran->hari_lahir_anak == "Minggu") echo "selected"; ?>>
                                                        Minggu
                                                    </option>
                                                </select>
                                            </div>

                                            <div class="col-xs-5">
                                                <div class="input-group date">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                    <input type="date" name="tanggal"
                                                        value="<?php echo $surat_kelahiran->tanggal_lahir_anak; ?>"
                                                        class="form-control pull-right">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bootstrap-timepicker">
                                        <div class="form-group">
                                            <label>Pukul</label>
                                            <div class="input-group">
                                                <input type="time" name="jam"
                                                    value="<?php echo $surat_kelahiran->jam_lahir_anak; ?>" id="pukul"
                                                    class="form-control timepicker" required>
                                                <div class="input-group-addon">
                                                    <i class="fa fa-clock-o"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Hubungan Sebagai</label>
                                            <input type="text" name="hubungan" class="form-control"
                                                placeholder="Hubungan Sebagai" required
                                                value="<?php echo $surat_kelahiran->hubungan_sebagai; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Tanda Tangan</label>
                                            <select name="pejabat" class="form-control" required>
                                                <?php
                                                foreach ($pejabat as $pejabat) :
                                                    if ($pejabat->id_pejabat == $surat_kelahiran->id_pejabat) {
                                                        ?>
                                                <option value="<?php echo $pejabat->id_pejabat; ?>">
                                                    <?php echo $pejabat->nama_pejabat; ?></option>
                                                <?php
                                                        } else {
                                                            ?>
                                                <option value="<?php echo $pejabat->id_pejabat; ?>">
                                                    <?php echo $pejabat->nama_pejabat; ?></option>
                                                <?php
                                                    }
                                                endforeach;
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="edit_surat_kelahiran" class="btn btn-success"
                                                value="Simpan">
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