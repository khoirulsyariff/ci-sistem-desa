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
    <font size="5"><u><b>SURAT IJIN KELUARGA</b></u></font>
</center>
<br /><br /><br />
<font align="justify">
    Yang bertanda tangan dibawah ini;
</font>
<table width="100%">
    <tr>
        <td width="20%">Nama Lengkap</td>
        <td width="3%">:</td>
        <td width="77%"><?php echo $izin_keluarga->nama; ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><?php echo $izin_keluarga->alamat; ?></td>
    </tr>
</table>
<br />
<font align="justify">
    Saya memberikan ijin kepada Anak saya yang tercantum di bawah ini, yang akan bekerja Keluar Negeri sebagai (TKW) di
    Negara <?php echo $izin_keluarga->tujuan_izin_keluarga; ?>.
</font>
<br />
<?php
$anak = $this->db->query("SELECT * FROM penduduk WHERE nik='$izin_keluarga->nik_anak'")->row();
?>
<table width="100%">
    <tr>
        <td width="20%">Nama Lengkap</td>
        <td width="3%">:</td>
        <td width="77%"><?php echo $anak->nama; ?></td>
    </tr>
    <tr>
        <td>NIK</td>
        <td>:</td>
        <td><?php echo $anak->nik; ?></td>
    </tr>
    <tr>
        <td>Tempat/Tanggal Lahir</td>
        <td>:</td>
        <td><?php echo $anak->tempat_lahir; ?>/<?= date('d F Y', strtotime($anak->tanggal_lahir)); ?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><?php echo $anak->jenis_kelamin; ?></td>
    </tr>
    <tr>
        <td>Status Perkawinan</td>
        <td>:</td>
        <td><?php echo $anak->status_perkawinan; ?></td>
    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td>:</td>
        <td><?php echo $anak->pekerjaan; ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><?php echo $anak->alamat; ?></td>
    </tr>
</table>
<br /><br />
<font align="justify">
    Demikian Surat Keterangan ini saya buat dengan sebenarnya dan tidak ada unsur paksaan dari kedua belah pihak dalam
    keadaan sehat jasmani dan rohani.<br /><br /><br />
</font>
<table width="100%">
    <tr>
        <td width="50%"></td>
        <td width="50%">
            <center>Warungbambu, <?= date('d F Y', strtotime($izin_keluarga->tanggal_izin_keluarga)); ?></center>
        </td>
    </tr>
    <tr>
        <td>
            <center>Yang Menerima Ijin</center>
        </td>
        <td>
            <center>Yang Memberikan Ijin</center>
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
        <td>
            <center><small>Materai, 6.000,-</center>
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
        <td>
            <center><b><u><?php echo $anak->nama; ?></u></b></center>
        </td>
        <td>
            <center><b><u><?php echo $izin_keluarga->nama; ?></u></b></center>
        </td>
    </tr>
</table>
<table width="100%">
    <tr>
        <td>
            <center>Mengetahui; </center>
        </td>
    </tr>
    <tr>
        <td>
            <center><?php echo $izin_keluarga->jabatan_pejabat; ?> </center>
        </td>
    </tr>
    <tr>
        <td><br /><br /><br />
            <center><?php echo $izin_keluarga->nama_pejabat; ?> </center>
        </td>
    </tr>
</table>
<script>
window.print();
</script>