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
    <font size="5"><u><b>SURAT KETERANGAN PENGUBURAN</b></u></font><br />Nomor:
    474.3/<?php echo $pemakaman->id_pemakaman; ?>/Desa/<?php echo substr($pemakaman->tanggal_pemakaman, 0, 4); ?>
</center>
<br /><br /><br />
<font align="justify">
    Yang bertanda tangan dibawah ini , Kepala Desa Warungbambu Kecamatan Karawang Timur Kabupaten Karawang Provinsi Jawa
    Barat, Menerangkan bahwa
</font>
<table width="100%">
    <tr>
        <td width="20%">Nama Almarhum</td>
        <td width="3%">:</td>
        <td width="77%"><?php echo $pemakaman->nama; ?></td>
    </tr>
    <tr>
        <td>NIK</td>
        <td>:</td>
        <td><?php echo $pemakaman->nik; ?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><?php echo $pemakaman->jenis_kelamin; ?></td>
    </tr>
    <tr>
        <td>Umur</td>
        <td>:</td>
        <td>
            <?php

			$lahir = new DateTime($pemakaman->tanggal_lahir);
			$hari_ini = new DateTime();

			$diff = $hari_ini->diff($lahir);
			echo $diff->y . " Tahun";

			?>




        </td>
        <td>
        </td>
    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td>:</td>
        <td><?php echo $pemakaman->pekerjaan; ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><?php echo $pemakaman->alamat; ?></td>
    </tr>
    <tr>
        <td><br /><br /><br />Telah di Makamkan</td>
        <td>:</td>
        <td></td>
    </tr>
    <tr>
        <td>Hari</td>
        <td>:</td>
        <td><?php echo $pemakaman->hari_pemakaman; ?></td>
    </tr>
    <tr>
        <td>Tanggal</td>
        <td>:</td>
        <td><?= date('d F Y', strtotime($pemakaman->tanggal_dimakamkan)); ?></td>
    </tr>
    <tr>
        <td>Jam</td>
        <td>:</td>
        <td><?php echo $pemakaman->jam_dimakamkan; ?></td>
    </tr>
    <tr>
        <td>Tempat</td>
        <td>:</td>
        <td><?php echo $pemakaman->tempat_pemakaman; ?></td>
    </tr>
</table>
<br /><br />
<font align="justify">
    Demikian Surat Keterangan ini , Saya buat sebenar benarnya agar menjadi Tahu dan dapat di gunakan dengan
    semestinya.<br /><br /><br />
</font>
<table width="100%">
    <tr>
        <td width="50%"></td>
        <td width="50%">
            <center>Warungbambu, <?= date('d F Y', strtotime($pemakaman->tanggal_pemakaman)); ?></center>
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
            <center><b><u><?php echo $pemakaman->nama_pejabat; ?></u></b></center>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <center>NIP. <?php echo $pemakaman->nip_pejabat; ?></center>
        </td>
    </tr>
</table>
<script>
window.print();
</script>