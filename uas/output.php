<!DOCTYPE html>
<html>
<head>
	<title>Data Diri</title>
</head>
<body>
	<h1>Data Diri</h1>

	<table>
		<tr>
			<td>Nama Pemesan</td>
			<td> : </td>
			<td>
				<?php echo $_POST["nama"]; ?>
			</td>
		</tr>

		<tr>
			<td>Jumlah Tiket</td>
			<td> : </td>
			<td>
				<?php $jumlah_beli = $_POST["jumlah_tiket"]; 
				echo $jumlah_beli;?>
			</td>
		</tr>

		<tr>
			<td>Kelas</td>
			<td> : </td>
			<td>
				<?php echo $_POST["kelas"]; ?>
				<?php 
				$harga_kelas = 0;
				if($_POST["kelas"] == "Ekonomi (Air Mineral)"):
				$harga_kelas = 1000000;
				echo "Rp. $harga_kelas";
				elseif
				($_POST["kelas"] == "Bisnis (Snack)"):
				$harga_kelas = 2000000;
				echo "Rp. $harga_kelas";
				else:
				$harga_kelas = 3000000;
				echo "Rp. harga_kelas";
				endif; 
				?>
			</td>
		</tr>

		<tr>
			<td>Tujuan</td>
			<td> : </td>
			<td>
				<?php echo $_POST["tujuan"]; ?>
			</td>
		</tr>

		<tr>
			<td>Asuransi</td>
			<td> : </td>
			<td>
				<?php 
            if(empty($_POST['asuransi'])){
                echo"Pilih asuransinya ...";
            }
            else{
                foreach($_POST['asuransi'] as $item){  
                    echo $item . ', ';
                }
            }

				 ?>
			</td>
		</tr>

		<tr>
			<th>Biaya Tambahan</th>
		</tr>

		<tr>
			<td>Bagasi</td>
			<td> : </td>
			<td>
				<?php 
				$harga = 0;
				if($_POST['bagasi'] == "5kg"):
				$harga = 100000;
				echo "Rp. $harga";
				elseif
				($_POST['bagasi'] == "10kg"):
				$harga = 150000;
				echo "Rp. $harga";
				else:
				$harga = 200000;
				echo "Rp. $harga";
				endif; ?>
			</td>
		</tr>

		<tr>
			<td>Asuransi</td>
			<td> : </td>
			<td>
				<?php 
         			$biaya = 0;
         			if($_POST['asuransi'] == "Asuransi Jiwa"):
         				$biaya = 50000;
         				echo "Rp. $biaya/asuransi";
         				elseif
         					($_POST['asuransi'] == "Asuransi Kecelakaan"):
         				$biaya = 50000;
         				echo "Rp. $biaya/asuransi";
         			else:
         				$biaya = 50000;
         				echo "Rp. $biaya/asuransi";
         			endif;
				 ?>
			</td>
		</tr>

		
		<tr>
			<td>Total Harga</td>
			<td> : </td>
			<td>

				<?php 
				$totalHarga = $harga_kelas * $jumlah_beli + $harga + $biaya ;
				echo "Rp. $totalHarga";
				?>
				
			</td>
		</tr>

		<tr>
			<td>Diskon</td>
			<td> : </td>
			<td>
				<?php 
				if ($jumlah_beli >=3) {
				 	$diskon = 0.3 * $totalHarga;
				 }else{
				 	$diskon = 0;
				 } 
				 echo "Rp. ", $diskon;
				 ?>
			</td>
		</tr>


		<tr>
			<td>Total Bayar</td>
			<td> : </td>
			<td>
				<?php 
				 $totaBayar = $totalHarga - $diskon; 
				 echo "Rp. ", $totaBayar;
				 ?>
			</td>
		</tr>
	</table>
</body>
</html>