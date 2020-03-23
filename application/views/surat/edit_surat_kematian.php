<div class="content-wrapper">
    <section class="content">
        <div class="box box-info">
            <div class="box-header">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <h4 style="text-align:center"><b>EDIT SURAT KEMATIAN</b></h4>
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

                                <form action="<?php echo base_url('surat/surat_kematian/edit'); ?>" method="post">

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>NIK</label>
                                            <input type="hidden" name="id" class="form-control" required
                                                value="<?php echo $surat_kematian->id_surat_kematian; ?>" />
                                            <select name="nik" class="form-control" id="nama" required>
                                                <?php
                                                foreach ($penduduk as $penduduk) :
                                                    if ($penduduk->nik == $surat_kematian->nik) {
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
                                            <label>NIK Pelapor</label>
                                            <select name="pelapor" class="form-control" id="nik" required>
                                                <?php
                                                foreach ($pendudukkk as $pendudukkk) :
                                                    if ($pendudukkk->nik == $surat_kematian->nik_pelapor) {
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
                                            <label>Umur Pelapor</label>
                                            <input type="number" name="umur" class="form-control"
                                                placeholder="Umur Pelapor" required
                                                value="<?php echo $surat_kematian->umur_pelapor; ?>" />
                                        </div>
                                        <div class="form-group"></div>
                                        <label>Tempat Tanggal Lahir</label>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <input type="text" name="tempat"
                                                    value="<?php echo $surat_kematian->tempat_kematian; ?>"
                                                    class="form-control" placeholder="Tempat">
                                            </div>
                                            <div class="col-xs-4">
                                                <select name="hari" class="form-control" required>
                                                    <option value="Senin"
                                                        <?php if ($surat_kematian->hari_kematian == "Senin") echo "selected"; ?>>
                                                        Senin
                                                    </option>
                                                    <option value="Selasa"
                                                        <?php if ($surat_kematian->hari_kematian == "Selasa") echo "selected"; ?>>
                                                        Selasa
                                                    </option>
                                                    <option value="Rabu"
                                                        <?php if ($surat_kematian->hari_kematian == "Rabu") echo "selected"; ?>>
                                                        Rabu
                                                    </option>
                                                    <option value="Kamis"
                                                        <?php if ($surat_kematian->hari_kematian == "Kamis") echo "selected"; ?>>
                                                        Kamis
                                                    </option>
                                                    <option value="Jumat"
                                                        <?php if ($surat_kematian->hari_kematian == "Jumat") echo "selected"; ?>>
                                                        jumat
                                                    </option>
                                                    <option value="Sabtu"
                                                        <?php if ($surat_kematian->hari_kematian == "Sabtu") echo "selected"; ?>>
                                                        Sabtu
                                                    </option>
                                                    <option value="Minggu"
                                                        <?php if ($surat_kematian->hari_kematian == "Minggu") echo "selected"; ?>>
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
                                                        value="<?php echo $surat_kematian->tanggal_kematian; ?>"
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
                                                    value="<?php echo $surat_kematian->jam_kematian; ?>" id="pukul"
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
                                                value="<?php echo $surat_kematian->hubungan_sebagai; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Tanda Tangan</label>
                                            <select name="pejabat" class="form-control" required>
                                                <?php
                                                foreach ($pejabat as $pejabat) :
                                                    if ($pejabat->id_pejabat == $surat_kematian->id_pejabat) {
                                                        ?>
                                                <option value="<?php echo $pejabat->id_pejabat; ?>" selected>
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
                                            <input type="submit" name="edit_surat_kematian" class="btn btn-success"
                                                value="Simpan">
                                            <a href="<?php echo base_url('surat/surat_kematian/'); ?>"
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