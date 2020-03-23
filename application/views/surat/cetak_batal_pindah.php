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
	@page{
		size: portrait;
	}
</style>
<img src="<?php echo base_url('assets/images/kop-surat.png'); ?>" width="100%" height="30%">
<br /><br /><br />
<center><font size="5"><u><b>SURAT KETERANGAN</b></u></font><br />Nomor: 470/<?php echo $batal_pindah->id_batal_pindah; ?>/II/DS/<?php echo substr($batal_pindah->tanggal_batal_pindah, 0, 4); ?></center>
<br /><br />
<font align="justify">
Yang bertanda tangan dibawah ini:
</font>
<table width="100%">
	<tr>
		<td width="20%">Nama Lengkap</td>
		<td width="3%">:</td>
		<td width="77%"><?php echo $batal_pindah->nama_pejabat; ?></td>
	</tr>
	<tr>
		<td>Jabatan</td>
		<td>:</td>
		<td><?php echo $batal_pindah->jabatan_pejabat; ?></td>
	</tr>
</table>
<font align="justify">
Menerangkan dengan sebenarnya bahwa :
</font>

<table width="100%">
	<tr>
		<td width="20%">Nama Lengkap</td>
		<td width="3%">:</td>
		<td width="77%"><?php echo $batal_pindah->nama; ?></td>
	</tr>
	<tr>
		<td>NIK</td>
		<td>:</td>
		<td><?php echo $batal_pindah->nik; ?></td>
	</tr>
	<tr>
		<td>Tempat/Tanggal Lahir</td>
		<td>:</td>
		<td><?php echo $batal_pindah->tempat_lahir; ?> / <?=date('d F Y', strtotime($batal_pindah->tanggal_lahir));?>
	</tr></td>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><?php echo $batal_pindah->jenis_kelamin; ?></td>
	</tr>
	<tr>
		<td>Status Perkawinan</td>
		<td>:</td>
		<td><?php echo $batal_pindah->status_perkawinan; ?></td>
	</tr>
	<tr>
		<td>Pekerjaan</td>
		<td>:</td>
		<td><?php echo $batal_pindah->pekerjaan; ?></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><?php echo $batal_pindah->alamat; ?></td>
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
		<td>Surat Keterangan ini digunakan Untuk : Pembatalan/Batal-Pindah</td>
		<td>:</td>
		<td><b><u>Pembatalan/Batal-Pindah</u></b></td>
	</tr>
</table>
<br />
<font align="justify">
Menurut penilitian kami dan surat pengantar dari RT-nya bahwa Nama/Orang tersebut benar Warga Desa Warungbambu, dan bertempat tinggal dialamat tersebut diatas. Menerangkan bahwa yang bersangkutan diatas benar batal Pindah ke alamat di bawah ini;<br />
</font>
<center><?php echo $batal_pindah->alamat_batal_pindah; ?></center><br /><br />
<font align="justify">
Demikian surat keterangan ini kami buat dengan sebenarnya dan dapat dipergunakan sebagaimana mestinya, agar yang berkepentingan menjadi maklum.<br /><br />
</font>
<table width="100%">
	<tr>
		<td width="50%"></td>
		<td width="50%"><center>Warungbambu, <?=date('d F Y', strtotime($batal_pindah->tanggal_batal_pindah));?></center></td>
	</tr>
	<tr>
		<td><center></center></td>
		<td><center>Kepala Desa Warungbambu</center></td>
	</tr>
	<tr>
		<td></td>
		<td><center>Kecamatan Karawang Timur</center></td>
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
		<td><center><b><u><?php echo $batal_pindah->nama_pejabat; ?></u></b></center></td>
	</tr>
	<tr>
		<td></td>
		<td><center>NIP. <?php echo $batal_pindah->nip_pejabat; ?></center></td>
	</tr>
</table>
<script>
	window.print();
</script>