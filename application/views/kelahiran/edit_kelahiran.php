<div class="content-wrapper">
    <section class="content">
        <div class="box box-info">
            <div class="box-header">
                <h4 style="text-align:center"><b>EDIT DATA KELAHIRAN</b></h4>
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
                <form action="<?php echo base_url('kelahiran/proses_edit'); ?>" method="post">
                    <!-- kolom ke-1 -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="hidden" name="id" value="<?php echo $kelahiran->id_kelahiran; ?>"
                                    class="form-control" />
                                <input type="text" name="nama" value="<?php echo $kelahiran->nama; ?>"
                                    class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label>Tempat Tanggal Lahir</label>
                                <div class="row">
                                    <div class="col-xs-3">
                                        <input type="text" name="tempat_lahir"
                                            value="<?php echo $kelahiran->tempat_lahir; ?>" class="form-control"
                                            placeholder="Tempat Lahir">
                                    </div>
                                    <div class="col-xs-4">
                                        <select name="hari" class="form-control" required>
                                            <option value="1" <?php if ($kelahiran->hari == "1") echo "selected"; ?>>
                                                Senin
                                            </option>
                                            <option value="2" <?php if ($kelahiran->hari == "3") echo "selected"; ?>>
                                                Selasa
                                            </option>
                                            <option value="3" <?php if ($kelahiran->hari == "4") echo "selected"; ?>>
                                                Rabu
                                            </option>
                                            <option value="4" <?php if ($kelahiran->hari == "5") echo "selected"; ?>>
                                                Kamis
                                            </option>
                                            <option value="5" <?php if ($kelahiran->hari == "5") echo "selected"; ?>>
                                                jumat
                                            </option>
                                            <option value="6" <?php if ($kelahiran->hari == "6") echo "selected"; ?>>
                                                Sabtu
                                            </option>
                                            <option value="7" <?php if ($kelahiran->hari == "7") echo "selected"; ?>>
                                                Minggu
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-xs-5">
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="date" name="tanggal_lahir"
                                                value="<?php echo $kelahiran->tanggal_lahir; ?>"
                                                class="form-control pull-right">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bootstrap-timepicker">
                                <div class="form-group">
                                    <label>Pukul</label>
                                    <div class="input-group">
                                        <input type="time" name="pukul" value="<?php echo $kelahiran->pukul; ?>"
                                            id="pukul" class="form-control timepicker" required>
                                        <div class="input-group-addon">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select class="select2 form-control custom-select" name="jenis_kelamin" required>
                                        <option value="Laki Laki"
                                            <?php if ($kelahiran->jenis_kelamin == "L") echo "selected"; ?>>
                                            Laki Laki
                                        </option>
                                        <option value="Perempuan"
                                            <?php if ($kelahiran->jenis_kelamin == "P") echo "selected"; ?>>
                                            Perempuan
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nama Ayah</label>
                                    <input type="text" name="nama_ayah" value="<?php echo $kelahiran->nama_ayah; ?>"
                                        class="form-control" required />
                                </div>
                                <div class="form-group">
                                    <label>Pekerjaan Ayah</label>
                                    <input type="text" name="pekerjaan_ayah"
                                        value="<?php echo $kelahiran->pekerjaan_ayah; ?>" class="form-control"
                                        required />
                                </div>
                                <div class="form-group">
                                    <label>Nama Ibu</label>
                                    <input type="text" name="nama_ibu" value="<?php echo $kelahiran->nama_ibu; ?>"
                                        class="form-control" required />
                                </div>
                                <div class="form-group">
                                    <label>Pekerjaan Ibu</label>
                                    <input type="text" name="pekerjaan_ibu"
                                        value="<?php echo $kelahiran->pekerjaan_ibu; ?>" class="form-control"
                                        required />
                                </div>










                            </div>
                        </div>


                        <!-- kolom ke-1 -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea name="alamat" class="form-control"
                                        rows="2"><?php echo $kelahiran->alamat; ?> </textarea>
                                </div>


                                <div class="form-group">
                                    <label>RT</label>
                                    <input type="text" name="rt" value="<?php echo $kelahiran->rt; ?>"
                                        class="form-control" required />
                                </div>
                                <div class="form-group">
                                    <label>RW</label>
                                    <select class="form-control selectlive" name="rw" required>
                                        <option value="<?php echo $kelahiran->rw; ?>" selected>
                                            <?php echo $kelahiran->rw; ?></option>
                                        <option value="Kepala Dusun Krajan 1">Kepala Dusun Krajan 1</option>
                                        <option value="Kepala Dusun Krajan 2">Kepala Dusun Krajan 2</option>
                                        <option value="Kepala Dusun Sukamaju">Kepala Dusun Sukamaju</option>
                                        <option value="Kepala Dusun Sukamulya">Kepala Dusun Sukamulya</option>
                                        <option value="Kepala Dusun WarnaJaya">Kepala Dusun WarnaJaya</option>
                                        <option value="Perumahan Bumi Karawang Permai">Perumahan Bumi Karawang Permai
                                        </option>
                                        <option value="Perumahan Gading Elok 2">Perumahan Gading Elok 2</option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label>KETERANGAN</label>
                                    <input type="text" name="keterangan" value="<?php echo $kelahiran->keterangan; ?>"
                                        class="form-control" rows="2" required />
                                </div>

                            </div>
                        </div>

                        <center>
                            <div class="form-group">
                                <button onClick="window.history.go(-1);" class="btn btn-success">Simpan</button>
                                <a href="<?php echo base_url('kelahiran/tampil'); ?>" class="btn btn-danger">Batal</a>
                            </div>
                        </center>
                </form>
            </div>
        </div>
    </section>
</div>