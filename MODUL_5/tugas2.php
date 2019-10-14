<html>
	<head>
		<title>Data Gudang</title>
	</head>
		<?php
			$conn = mysqli_connect('localhost','root','','penyimpanan');
		?>
		<body>
			<center>
				<h3>Masukkan Data Gudang :</h3>
					<table>
					<form method='POST' action = 'tugas2.php'>
						<tr>
							<td>Kode Gudang</td>
							<td>:</td>
							<td><input type='text' name='kode' size='10'></td>
						</tr>
						<tr>
							<td>Nama Gudang</td>
							<td>:</td>
							<td><input type='text' name='nama' size='30'></td>
						</tr>
						<tr>
							<td>Lokasi</td>
							<td>:</td>
							<td><input type='text' name='lokasi' size='40'></td>
						</tr>
					</table>
					<input type='submit' value='Masukkan' name='submit'>
					</form>
					<?php
					error_reporting(E_ALL^E_NOTICE);
					$kode = $_POST['kode'];
					$nama = $_POST['nama'];
					$lokasi = $_POST['lokasi'];
					$submit = $_POST['submit'];
					$input = "INSERT into gudang (kode_gudang, nama_gudang,lokasi)values
					('$kode', '$nama','$lokasi')";
					if ($submit){
						if ($kode==''){
							echo "</br>Kode tidak boleh kosong";
						}elseif ($nama==''){
							echo "</br>Nama tidak boleh kosong";
						}elseif ($lokasi==''){
							echo "</br>Lokasi tidak boleh kosong";
						}else
							mysqli_query($conn, $input);
							echo "
							<script>
							alert('data berhasil dimasukkan');
							document.location.href='tugas2.php';
							</script>";
					}
					?>
					<hr>
					<h3>Data Gudang</h3>
					<table border='1'>
						<tr>
							<td align='center' ><b>Kode Gudang</b></td>
							<td align='center' ><b>Nama Gudang</b></td>
							<td align='center' ><b>Lokasi</b></td>
							<td colspan= 2 align='center' ><b>Keterangan</b></td>
						</tr>
						<?php
						$cari = "SELECT * from gudang order by kode_gudang";
						$hasil_cari = mysqli_query($conn,$cari);
						while($data = mysqli_fetch_array($hasil_cari)){
						echo"
						<tr>
							<td>$data[kode_gudang]</td>
							<td>$data[nama_gudang]</td>
							<td>$data[lokasi]</td>
							<td><a href='formupdate.php?KODE=$data[kode_gudang]'>Ubah</a></td>
							<td><a href='hapus2.php?KODE=$data[kode_gudang]'>Hapus</a></td>
						</tr>";
						}
						?>
					</table>
				</center>
			</body>
		</html>	