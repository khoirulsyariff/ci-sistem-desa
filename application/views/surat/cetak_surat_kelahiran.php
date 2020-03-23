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
<table width="100%">
    <tr>
        <td width="15%">Desa/Kelurahan</td>
        <td width="1%">:</td>
        <td width="84%">WARUNGBAMBU</td>
    </tr>
    <tr>
        <td>Kecamatan</td>
        <td>:</td>
        <td>KARAWANG TIMUR</td>
    </tr>
    <tr>
        <td>Kabupaten</td>
        <td>:</td>
        <td>KARAWANG</td>
    </tr>
    <tr>
        <td>Provinsi</td>
        <td>:</td>
        <td>JAWA BARAT</td>
    </tr>
</table>
<br /><br />
<center><b>UNTUK YANG BERSANGKUTAN</b> <br />
    <font size="5"><u><b>SURAT KETERANGAN KELAHIRAN</b></u></font><br />Nomor:
    474.1/<?php echo $surat_kelahiran->id_surat_kelahiran; ?>/Desa/<?php echo substr($surat_kelahiran->tanggal_surat_kelahiran, 0, 4); ?>
</center>
<br /><br /><br />
<font align="justify">
    Yang bertandatangan di bawah ini , <?php echo $surat_kelahiran->jabatan_pejabat; ?> Desa Warungbambu Kecamatan
    Karawang Timur Kabupaten Karawang, menerangkan bahwa pada:
</font>
<table width="100%">
    <tr>
        <td width="20%">Hari</td>
        <td width="3%">:</td>
        <td width="77%"><?php echo $surat_kelahiran->hari_lahir_anak; ?></td>
    </tr>
    <tr>
        <td>Tempat/Tanggal Lahir</td>
        <td>:</td>
        <td><?php echo $surat_kelahiran->tempat_lahir_anak; ?> /
            <?= date('d F Y', strtotime($surat_kelahiran->tanggal_lahir_anak)); ?></td>
    </tr>
    <tr>
        <td>Pukul</td>
        <td>:</td>
        <td><?php echo $surat_kelahiran->jam_lahir_anak; ?></td>
    </tr>
</table>
<br />
<center>Telah lahir seorang anak <?php echo $surat_kelahiran->kelamin_anak; ?> Bernama
    :<br /><b>"<?php echo $surat_kelahiran->nama_anak; ?>"</b><br /></center>
Dari seorang Ibu :<?php
                    $ibu = $this->db->query("SELECT * FROM penduduk WHERE nik='$surat_kelahiran->nik_ibu'")->row();
                    $ayah = $this->db->query("SELECT * FROM penduduk WHERE nik='$surat_kelahiran->nik_ayah'")->row();
                    ?>
<table width="100%">
    <tr>
        <td width="20%">Nama Lengkap</td>
        <td width="3%">:</td>
        <td width="77%"><?php echo $ibu->nama; ?></td>
    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td>:</td>
        <td><?php echo $ibu->pekerjaan; ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><?php echo $ibu->alamat; ?></td>
    </tr>
</table> <br>
Dari seorang Ayah <br />
<table width="100%">
    <tr>
        <td width="20%">Nama Lengkap</td>
        <td width="3%">:</td>
        <td width="77%"><?php echo $ayah->nama; ?></td>
    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td>:</td>
        <td><?php echo $ayah->pekerjaan; ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><?php echo $ayah->alamat; ?></td>
    </tr>
</table>
<br />Surat keterangan ini dibuat berdasarkan keterangan Pelapor :
<?php
$pelapor = $this->db->query("SELECT * FROM penduduk WHERE nik='$surat_kelahiran->nik_pelapor'")->row();
?>
<table width="100%">
    <tr>
        <td width="20%">Nama Lengkap</td>
        <td width="3%">:</td>
        <td width="77%"><?php echo $pelapor->nama; ?></td>
    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td>:</td>
        <td><?php echo $pelapor->pekerjaan; ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><?php echo $pelapor->alamat; ?></td>
    </tr>
</table>
<br />
<font align="justify">
    Surat Keterangan ini di gunakan sebagaimana mestinya.<br /><br /><br />
</font>
<table width="100%">
    <tr>
        <td width="50%"></td>
        <td width="50%">
            <center>Warungbambu, <?= date('d F Y', strtotime($surat_kelahiran->tanggal_surat_kelahiran)); ?> </center>
        </td>
    </tr>
    <tr>
        <td></td>
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
        <td></td>
        <td>
            <center><b><u><?php echo $surat_kelahiran->nama_pejabat; ?></u></b></center>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <center>NIP. <?php echo $surat_kelahiran->nip_pejabat; ?></center>
        </td>
    </tr>
</table>
<script>
window.print();
</script>