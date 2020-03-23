<div class="content-wrapper">
    <section class="content">
        <div class="box box-info">
            <div class="box-header">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <h4 style="text-align:center"><b>TAMBAH SURAT PEMAKAMAN</b></h4>
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

                                <form action="<?php echo base_url('surat/pemakaman/tambah'); ?>" method="post">

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>NIK</label><a href="<?php echo base_url(); ?>penduduk/tambah/"
                                                class="btn btn-sm btn-primary pull-right">Tambah
                                                Penduduk</a><br /><br />
                                            <select name="nik" class="form-control" id="nama" required>
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
                                            <label>Tempat Pemakaman</label>
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <input type="text" name="tempat" class="form-control"
                                                        placeholder=".Tempat">
                                                </div>
                                                <div class="col-xs-4">
                                                    <select name="hari" class="form-control" required>
                                                        <option value="" selected disabled>- pilih -</option>
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
                                                            class="form-control pull-right" id="datepicker"
                                                            placeholder="Tanggal Dimakamkan">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bootstrap-timepicker">
                                            <div class="form-group">
                                                <label>Pukul</label>
                                                <div class="input-group">
                                                    <input type="time" name="jam" id="jam"
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
                                                <input type="submit" name="tambah_pemakaman" class="btn btn-success"
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