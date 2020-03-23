<label class="content-wrapper">
    <section class="content">
        <label class="box box-info">
            <label class="box-header">

                <label class="container-fluid">
                    <label class="row">
                        <label class="col-md-6">
                            <div class="card">
                                <h4 style="text-align:center"><b>TAMBAH DATA PENDUDUK</b></h4>
                                <hr>
                            </div>

                            <label class="box-body">

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

                                <form action="<?php echo base_url('penduduk/proses_tambah'); ?>" method="post">


                                    <div class="form-group">
                                        <label>NIK</label>
                                        <input type="text" name="nik" class="form-control" required />
                                    </div>

                                    <div class="form-group">
                                        <label>No Kartu Keluarga</label>
                                        <input type="text" name="no_kk" class="form-control" required />
                                    </div>

                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama" class="form-control" required />
                                    </div>

                                    <div class="form-group">
                                        <label>Tempat Tanggal Lahir</label>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <input type="text" name="tempat_lahir" class="form-control"
                                                    placeholder="Tempat">
                                            </div>
                                            <div class="col-xs-5">
                                                <div class="input-group date">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                    <input type="date" name="tanggal_lahir"
                                                        class="form-control pull-right" id=""
                                                        placeholder="Tanggal Lahir">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select name="jenis_kelamin" class="form-control" required>
                                            <option value="" selected disabled>- pilih -</option>
                                            <option value="Laki Laki">Laki Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea name="alamat" class="form-control" rows="3" required></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>RT</label>
                                        <input type="text" name="rt" class="form-control" required />
                                    </div>
                                    <div class="form-group">
                                        <label>RW</label>
                                        <select name="rw" class="form-control" required>
                                            <option value="" selected disabled>- pilih -</option>
                                            <option value="Kepala Dusun Krajan 1">Kepala Dusun Krajan 1</option>
                                            <option value="Kepala Dusun Krajan 2">Kepala Dusun Krajan 2</option>
                                            <option value="Kepala Dusun Sukamaju">Kepala Dusun Sukamaju</option>
                                            <option value="Kepala Dusun Sukamulya">Kepala Dusun Sukamulya
                                            </option>
                                            <option value="Kepala Dusun WarnaJaya">Kepala Dusun WarnaJaya
                                            </option>
                                            <option value="Perumahan Bumi Karawang Permai">Perumahan Bumi
                                                Karawang
                                                Permai</option>
                                            <option value=">Perumahan Gading Elok 2">Perumahan Gading Elok 2
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Agama</label>
                                        <select class="form-control selectlive" name="agama" required>
                                            <option value="" selected disabled>- pilih -</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Katholik">Katholik</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Budha">Budha</option>
                                            <option value="Konghucu">Konghucu</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Pekerjaan</label>
                                        <input type="text" name="pekerjaan" class="form-control" required />
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Pendidikan</label>
                                            <select name="pendidikan" class="form-control" required>
                                                <option value="" selected disabled>- pilih -</option>
                                                <option value="Tidak Sekolah">Tidak Sekolah</option>
                                                <option value="Tidak Tamat SD">Tidak Tamat SD</option>
                                                <option value="SD">SD</option>
                                                <option value="SMP">SMP</option>
                                                <option value="SMA">SMA</option>
                                                <option value="D1">D1</option>
                                                <option value="D2">D2</option>
                                                <option value="D3">D3</option>
                                                <option value="S1">S1</option>
                                                <option value="S2">S2</option>
                                                <option value="S3">S3</option>
                                        </div>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Status Perkawinan</label>
                                        <select name="status_perkawinan" class="form-control" required>
                                            <option value="" selected disabled>- pilih -</option>
                                            <option value="Menikah">Menikah</option>
                                            <option value="Belum Menikah">Belum Menikah</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Status Tinggal</label>
                                        <select name="status" class="form-control" required>
                                            <option value="" selected disabled>- pilih -</option>
                                            <option value="Tetap">Tetap</option>
                                            <option value="Kontrak">Kontrak</option>
                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <label>Golongan Darah</label>
                                        <input type="text" name="golongan_darah" class="form-control" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Kewarganegaraan</label>
                                        <select name="kewarganegaraan" class="form-control" required>
                                            <option value="" selected disabled>- pilih -</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Warga Negara Asing">Warga Negara Asing</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <a href="<?php echo base_url('penduduk/tampil'); ?>"
                                            class="btn btn-danger">Batal</a>
                                    </div>
                                    <?= form_close(); ?>
                            </label>
                            </form>
                        </label>
                    </label>
                </label>
            </label>
        </label>
</label>
</label>
</section>
</label>