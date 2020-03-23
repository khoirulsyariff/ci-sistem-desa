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
    145/<?php echo $penghasilan->id_penghasilan; ?>/DS/<?php echo substr($penghasilan->tanggal_penghasilan, 0, 4); ?>
</center>
<br /><br />
<font align="justify">
    Yang bertanda tangan dibawah ini:
</font>
<table width="100%">
    <tr>
        <td width="20%">Nama Lengkap</td>
        <td width="3%">:</td>
        <td width="77%"><?php echo $penghasilan->nama_pejabat; ?></td>
    </tr>
    <tr>
        <td>Jabatan</td>
        <td>:</td>
        <td><?php echo $penghasilan->jabatan_pejabat; ?></td>
    </tr>
</table>
<br>
<font align="justify">
    Menerangkan dengan sebenarnya bahwa :
</font>

<table width="100%">
    <tr>
        <td width="20%">Nama Lengkap</td>
        <td width="3%">:</td>
        <td width="77%"><?php echo $penghasilan->nama; ?></td>
    </tr>
    <tr>
        <td>NIK</td>
        <td>:</td>
        <td><?php echo $penghasilan->nik; ?></td>
    </tr>
    <tr>
        <td>Tempat/Tanggal Lahir</td>
        <td>:</td>
        <td><?php echo $penghasilan->tempat_lahir; ?> / <?= date('d F Y', strtotime($penghasilan->tanggal_lahir)); ?>
        </td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><?php echo $penghasilan->jenis_kelamin; ?></td>
    </tr>
    <tr>
        <td>Status Perkawinan</td>
        <td>:</td>
        <td><?php echo $penghasilan->status_perkawinan; ?></td>
    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td>:</td>
        <td><?php echo $penghasilan->pekerjaan; ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><?php echo $penghasilan->alamat; ?></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>Keperluan Untuk</td>
        <td>:</td>
        <td><?php echo $penghasilan->keperluan_penghasilan; ?></td>
    </tr>
    <tr>
        <td>Keterangan</td>
        <td>:</td>
        <td>Berdasarkan pernyataan yang bersangkutan mempunyai penghasilan setiap bulannya sebesar Rp.
            <?php echo number_format($penghasilan->jumlah_penghasilan); ?></td>
    </tr>
</table>
<br />
<font align="justify">
    Surat Keterangan ini dinyatakan tidak berlaku apabila terjadi pelanggaran peraturan perundang-undangan dan perda
    Kabupaten Karawang serta, apabila terdapat kekeliruan/kesalahan dalam pembuatannya. Pemohon/pemegang bersedia
    mempertanggung jawabakan secara hukum tanpa melibatkan pihak manapun<br />

    Demikian surat keterangan ini dibuat dengan sebenarnya serta dapat dipergunakan sebagaimana mestinya.<br /><br />
</font>
<table width="100%">
    <tr>
        <td width="50%"></td>
        <td width="50%">
            <center>Warungbambu, <?= date('d F Y', strtotime($penghasilan->tanggal_penghasilan)); ?></center>
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
        <td>
            <center><b><u><?php echo $penghasilan->nama; ?></u></b></center>
        </td>
        <td>
            <center><b><u><?php echo $penghasilan->nama_pejabat; ?></u></b></center>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <center>NIP. <?php echo $penghasilan->nip_pejabat; ?></center>
        </td>
    </tr>
</table>
<script>
window.print();
</script>