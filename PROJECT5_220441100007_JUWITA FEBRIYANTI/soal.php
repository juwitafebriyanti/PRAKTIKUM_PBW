<!DOCTYPE html>
<html>
<head>
	<title>Form Gaji Karyawan</title>
	<style>
		form {
			width: 50%;
			margin: auto;
			padding: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
			box-shadow: 0 0 10px #ccc;
			font-size: 18px;
			font-family: Arial, sans-serif;
		}

		label {
			display: block;
			margin-bottom: 10px;
		}

		input[type=text], input[type=number] {
			padding: 5px;
			border-radius: 5px;
			border: 1px solid #ccc;
			width: 100%;
			margin-bottom: 20px;
			box-sizing: border-box;
			font-size: 16px;
		}

		input[type=submit] {
			background-color: #0b0b0b;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 18px;
		}

		h1, h2 {
			text-align: center;
			font-family: Arial, sans-serif;
		}

		table {
			width: 50%;
			margin: auto;
			margin-top: 50px;
			border-collapse: collapse;
			font-size: 18px;
			font-family: Arial, sans-serif;
		}

		th, td {
			border: 1px solid #ccc;
			padding: 10px;
			text-align: left;
			background-color: #afaaaa;
		}

		th {
			background-color: #afaaaa;
			color: black;
		}

	</style>
</head>
<body>
	<?php
		if (isset($_POST['submit'])) {
			$nama = $_POST['nama'];
			$jabatan = $_POST['jabatan'];
			$gaji = $_POST['gaji'];
			$tunjangan = $_POST['tunjangan'];
			$potongan = $_POST['potongan'];

			$gaji_bersih = $gaji + $tunjangan - $potongan;

			echo "<h2>Output Gaji Karyawan</h2>";
			echo "<table>";
			echo "<tr><th>Nama karyawan</th><td>" . $nama . "</td></tr>";
			echo "<tr><th>Jabatan karyawan</th><td>" . $jabatan . "</td></tr>";
			echo "<tr><th>Gaji pokok karyawan</th><td>" . $gaji . "</td></tr>";
			echo "<tr><th>Tunjangan karyawan</th><td>" . $tunjangan . "</td></tr>";
			echo "<tr><th>Potongan karyawan</th><td>" . $potongan . "</td></tr>";
			echo "<tr><th>Gaji bersih karyawan</th><td>" . $gaji_bersih . "</td></tr>";
			echo "</table>";
		} else {
	?>
	<h1>Form Gaji Karyawan</h1>
	<form method="POST" action="">
		<label for="nama">Nama karyawan:</label>
		<input type="text" id="nama" name="nama"><br>

		<label for="jabatan">Jabatan karyawan:</label>
		<input type="text" id="jabatan" name="jabatan"><br>

		<label for="gaji">Gaji pokok karyawan:</label>
		<input type="number" id="gaji" name="gaji"><br>

		<label for="tunjangan">Tunjangan karyawan:</label>
		<input type="number" id="tunjangan" name="tunjangan"><br>

		<label for="potongan">Potongan karyawan:</label>
		<input type="number" id="potongan" name="potongan"><br>

		<input type="submit" name="submit" value="Hitung">
	</form>
	<?php } ?>
</body>
</html>