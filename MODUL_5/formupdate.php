<?php
			$conn = mysqli_connect('localhost', 'root','','penyimpanan');
			$kode = $_GET['KODE'];
			$cari = "SELECT * from gudang where kode_gudang= '$kode'";
			$hasil_cari = mysqli_query($conn,$cari);
			$data = mysqli_fetch_array($hasil_cari);
			
			if($data > 0){
		?>
<html>
	<head>
		<title>Data Gudang</title>
	</head>
		<body>
			<center>
				<h3>Update Data Gudang :</h3>
					<table>
					<form method='POST' action = 'update2.php'>
						<tr>
							<td>Kode Gudang</td>
							<td>:</td>
							<td><input type='text' name='kode' size='10'value="<?php echo $data['kode_gudang']?>"></td>
						</tr>
						<tr>
							<td>Nama Gudang</td>
							<td>:</td>
							<td><input type='text' name='nama' size='30'value="<?=$data['nama_gudang']?>"></td>
						</tr>
						<tr>
							<td>Lokasi</td>
							<td>:</td>
							<td><input type='text' name='lokasi' size='40'value="<?=$data['lokasi']?>"></td>
						</tr>
					</table>
					<input type='submit' value='Update Data' name='submit'>
					</form>
				</center>	
				<?php
				}
				?>				
			</body>
		</html>	