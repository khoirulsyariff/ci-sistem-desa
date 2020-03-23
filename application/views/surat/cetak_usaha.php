<style type="text/css">
@media print and (width: 21cm) and (height: 33cm) {
    @page {
        margin: 1cm;
    }
}

.tabelku {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 2px;
}
</style>
<style type="text/css" media="print">
@page {
    size: portrait;
}
</style>
<img src="<?php echo base_url('assets/images/kop-surat.png'); ?>" width="100%" height="30%">
<br /><br /><br />
<center>
    <font size="5"><u><b>SURAT KETERANGAN USAHA</b></u></font><br />Nomor:
    503/<?php echo $usaha->id_usaha; ?>/VII/DS/<?php echo substr($usaha->tanggal_usaha, 0, 4); ?>
</center>
<br /><br /><br />
<font align="justify">
    Yang bertanda tangan dibawah ini , <?php echo $usaha->jabatan_pejabat; ?> Desa Warungbambu Kecamatan Karawang Timur
    Kabupaten Karawang Provinsi Jawa Barat
</font>
<table width="100%">
    <tr>
        <td width="20%">Nama Lengkap</td>
        <td width="3%">:</td>
        <td width="77%"><?php echo $usaha->nama; ?></td>
    </tr>
    <tr>
        <td>NIK</td>
        <td>:</td>
        <td><?php echo $usaha->nik; ?></td>
    </tr>
    <tr>
        <td>Tempat/Tanggal Lahir</td>
        <td>:</td>
        <td><?php echo $usaha->tempat_lahir; ?>/<?= date('d F Y', strtotime($usaha->tanggal_lahir)); ?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><?php echo $usaha->jenis_kelamin; ?></td>
    </tr>
    <tr>
        <td>Status Perkawinan</td>
        <td>:</td>
        <td><?php echo $usaha->status_perkawinan; ?></td>
    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td>:</td>
        <td><?php echo $usaha->pekerjaan; ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><?php echo $usaha->alamat; ?></td>
    </tr>
</table>
<br>
<font align="justify">
    Menurut penelitian dan Pengantar RT setempat Nama/Orang tersebut benar Warga Desa Warungbambu Kecamatan Karawang
    Timur Kabupaten Karawang , bahwa yang bersangkutan benar Membuka / Mempunyai Usaha
    "<?php echo $usaha->nama_usaha; ?>" di Alamat Usaha <?php echo $usaha->alamat; ?> , sejak tahun
    <?php echo $usaha->sejak_usaha; ?> sampai sekarang .<br /><br />
    Demikian Surat Keterangan Usaha ini dibuat dengan sebenarnya, untuk dapat dipergunakan sesuai keperluannya serta
    agar yang berkepentingan menjadi maklum.<br /><br /><br />
</font>
<table width="100%">
    <tr>
        <td width="50%"></td>
        <td width="50%">
            <center>Warungbambu, <?= date('d F Y', strtotime($usaha->tanggal_usaha)); ?></center>
        </td>
    </tr>
    <tr>
        <td>
            <center>Yang Bersangkutan</center>
        </td>
        <td>
            <center>Kepala Desa Warungbambu</center>
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>
            <center><b><u><?php echo $usaha->nama; ?></u></b></center>
        </td>
        <td>
            <center><b><u><?php echo $usaha->nama_pejabat; ?></u></b></center>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <center>NIP. <?php echo $usaha->nip_pejabat; ?></center>
        </td>
    </tr>
</table>
<script>
window.print();
</script>