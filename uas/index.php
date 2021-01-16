<!DOCTYPE html>
<html>
<head>
	<title>Pemesanan Tiket Maskapai</title>

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
	<h1>Pemesanan Tiket Maskapai</h1>

	<form name="form" method="post" action="output.php">
		<table>
			<tr>
				<td>Nama Pemesan</td>
				<td> : </td>
				<td>
					<input type="text" name="nama" id="nama">
				</td>
			</tr>

			<tr>
				<td>Jumlah Tiket</td>
				<td> : </td>
				<td>
					<input type="number" name="jumlah_tiket" id="jumlah_tiket">
				</td>
			</tr>

			<tr>
				<td>Kelas</td>
				<td> : </td>
				<td>
					<select name="kelas" id="kelas">
						<option>--PILIH--</option>
						<option value="Ekonomi (Air Mineral)">Ekonomi</option>
						<option value="Bisnis (Snack)">Bisnis</option>
						<option value="Eksekutif (Makan)">Eksekutif</option>
					</select>
				</td>
			</tr>

			<tr>
				<td>Tujuan</td>
				<td> : </td>
				<td>
					<select name="tujuan" id="tujuan">
						<option>--PILIH--</option>
						<option value="Mekkah">Mekkah</option>
						<option value="Maddinah">Maddinah</option>
						<option value="Turkish">Turkish</option>
					</select>
				</td>
			</tr>

			<tr>
				<td>Bagasi</td>
				<td> : </td>
				<td>
					<input type="radio" name="bagasi" id="bagasi" checked="checked" value="5kg"><label>5kg</label>
					<input type="radio" name="bagasi" id="bagasi" value="10kg"><label>10kg</label>
					<input type="radio" name="bagasi" id="bagasi" value="15kg"><label>15kg</label>
				</td>
			</tr>

			<tr>
				<td>Asuransi</td>
				<td> : </td>
				<td>
					<input type="checkbox" name="asuransi[]" id="asuransi" value="Asuransi Jiwa">Asuransi Jiwa
					<input type="checkbox" name="asuransi[]" id="asuransi" value="Asuransi Kecelakaan">Asuransi Kecelakaan
					<input type="checkbox" name="asuransi[]" id="asuransi" value="Asuransi Keterlambatan">Asuransi Keterlambatan
				</td>
			</tr>

			<tr>
				<td>
					<input type="submit" name="simpan" id="simpan" value="Simpan" onclick="tampilkan()">
				</td>
				<td>
					<input type="reset" name="batal" id="batal" value="Batal">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>