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
    <font size="5"><u><b>SURAT KETERANGAN</b></u></font><br />Nomor:
    470/<?php echo $cerai_mati->id_cerai_mati; ?>/II/DS/<?php echo substr($cerai_mati->tanggal_cerai_mati, 0, 4); ?>
</center>
<br /><br />
<font align="justify">
    Yang bertanda tangan dibawah ini:
</font>
<table width="100%">
    <tr>
        <td width="20%">Nama Lengkap</td>
        <td width="3%">:</td>
        <td width="77%"><?php echo $cerai_mati->nama_pejabat; ?></td>
    </tr>
    <tr>
        <td>Jabatan</td>
        <td>:</td>
        <td><?php echo $cerai_mati->jabatan_pejabat; ?></td>
    </tr>
</table>
<font align="justify">
    Menerangkan dengan sebenarnya bahwa :
</font>

<table width="100%">
    <tr>
        <td width="20%">Nama Lengkap</td>
        <td width="3%">:</td>
        <td width="77%"><?php echo $cerai_mati->nama; ?></td>
    </tr>
    <tr>
        <td>NIK</td>
        <td>:</td>
        <td><?php echo $cerai_mati->nik; ?></td>
    </tr>
    <tr>
        <td>Tempat/Tanggal Lahir</td>
        <td>:</td>
        <td><?php echo $cerai_mati->tempat_lahir; ?> / <?= date('d F Y', strtotime($cerai_mati->tanggal_lahir)); ?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><?php echo $cerai_mati->jenis_kelamin; ?></td>
    </tr>
    <tr>
        <td>Status Perkawinan</td>
        <td>:</td>
        <td><?php echo $cerai_mati->status_perkawinan; ?></td>
    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td>:</td>
        <td><?php echo $cerai_mati->pekerjaan; ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><?php echo $cerai_mati->alamat; ?></td>
    </tr>
</table>
<br />
<font align="justify">
    Orang tersebut adalah bener salah seorang warga kami yang telah memohon :<br />
    Surat Keterangan..................................<b>"CERAI MATI"</b>....................................<br />
    Dalam rangka...............................<b>ADMINISTRASI PEKERJAAN</b>............................. <br />
    Keterangan ini berlaku
    sampai...........................<b>SELESAI</b>......................................<br /><br />
    Dan kami berdasarkan sepengetahuan dan pertimbangan bahwa sampai Keterangan ini di buat adalah benar bahwa orang
    tersebut diatas adalah warga kami yang bertempat tinggal di lingkungan <?php echo $cerai_mati->alamat; ?>, dan benar
    bahwa nama tersebut diatas Status Cerai Mati.<br /><br />
    Demikian surat keterangan ini dibuat mengingat sumapah jabatan dan dapat dipergunakan sebagaimana
    mestinya.<br /><br />
</font>
<table width="100%">
    <tr>
        <td width="50%"></td>
        <td width="50%">
            <center>Warungbambu, <?= date('d F Y', strtotime($cerai_mati->tanggal_cerai_mati)); ?></center>
        </td>
    </tr>
    <tr>
        <td>
            <center></center>
        </td>
        <td>
            <center>Kepala Desa Warungbambu</center>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <center>Kecamatan Karawang Timur</center>
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
        <td>
            <center><b><u><?php echo $cerai_mati->nama_pejabat; ?></u></b></center>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <center>NIP. <?php echo $cerai_mati->nip_pejabat; ?></center>
        </td>
    </tr>
</table>
<script>
window.print();
</script>