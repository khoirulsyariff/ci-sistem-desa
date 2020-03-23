<div class="content-wrapper">
    <section class="content">
        <div class="box box-info">
            <div class="box-header">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <h4 style="text-align:center"><b>EDIT SURAT PEMAKAMAN</b></h4>
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

                                <form action="<?php echo base_url('surat/pemakaman/edit'); ?>" method="post">

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>NIK</label>
                                            <input type="hidden" name="id" class="form-control" required
                                                value="<?php echo $pemakaman->id_pemakaman; ?>" />
                                            <select name="nik" class="form-control" id="nama" required>
                                                <?php
                        foreach ($penduduk as $penduduk) :
                          if ($penduduk->nik == $pemakaman->nik) {
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




                                        <div class="form-group"></div>
                                        <label>Tempat Tanggal Lahir</label>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <input type="text" name="tempat"
                                                    value="<?php echo $pemakaman->tempat_pemakaman; ?>"
                                                    class="form-control" placeholder=".Tempat">
                                            </div>
                                            <div class="col-xs-4">
                                                <select name="hari" class="form-control" required>
                                                    <option value="<?php echo $pemakaman->hari_pemakaman; ?>" selected>
                                                        <?php echo $pemakaman->hari_pemakaman; ?>
                                                    </option>
                                                    <option value="">Senin</option>
                                                    <option value="">Selasa</option>
                                                    <option value="">Rabu</option>
                                                    <option value="">Kamis</option>
                                                    <option value="">jumat</option>
                                                    <option value="">Sabtu</option>
                                                    <option value="">Minggu</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-5">
                                                <div class="input-group date">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                    <input type="text" name="tanggal"
                                                        value="<?php echo $pemakaman->tanggal_dimakamkan; ?>"
                                                        class="form-control pull-right" id="datepicker">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bootstrap-timepicker">
                                        <div class="form-group">
                                            <label>Pukul</label>
                                            <div class="input-group">
                                                <input type="time" name="jam"
                                                    value="<?php echo $pemakaman->jam_dimakamkan; ?>" id="pukul"
                                                    class="form-control timepicker" required>
                                                <div class="input-group-addon">
                                                    <i class="fa fa-clock-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanda Tangan</label>
                                            <select name="pejabat" class="form-control" required>
                                                <?php
                        foreach ($pejabat as $pejabat) :
                          if ($pejabat->id_pejabat == $pemakaman->id_pejabat) {
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
                                            <input type="submit" name="edit_pemakaman" class="btn btn-success"
                                                value="Simpan">
                                            <a href="<?php echo base_url('surat/pemakaman/'); ?>"
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