<!DOCTYPE html>
<html>
<head>
	<title>Program PHP</title>
<style>
	body {
		font-family: Arial, sans-serif;
		background-image: url(bg.jpg);
		background-size: 100rem;
	}
	h2 {
		text-align: center;
		color: #333;
	}
	ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
		background-color: #333;
	}
	li {
		float: left;
	}
	li a,
	.dropbtn {
		display: inline-block;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}
	li a:hover,
	.dropdown:hover .dropbtn {
		background-color: #953e7e;
	}
	li.dropdown {
		display: inline-block;
	}
	form {
		margin-top: 20px;
		text-align: center;
	}
	input[type="text"], input[type="submit"] {
		padding: 5px;
		border-radius: 5px;
		border: none;
	}
	input[type="submit"] {
		background-color: #333;
		color: #fff;
		cursor: pointer;
	}
	input[type="submit"]:hover {
		background-color: #555;
	}
	h3 {
		color: #333;
		margin-top: 20px;
		text-align: center;
	}
</style>

</head>
<body>
	<h2>Menu Program PHP</h2>
	<ul>
		<li><a href="?page=faktorial">Fungsi Faktorial</a></li>
		<li><a href="?page=fibonacci">Fungsi Fibonacci</a></li>
		<li><a href="?page=suhu">Konversi Suhu</a></li>
	</ul>
 
	<?php
		if(isset($_GET['page'])){
			$page = $_GET['page'];
			switch($page){
				case 'faktorial':
					echo "<h3>Fungsi Faktorial</h3>";
					echo "<form method='post'>";
					echo "Masukkan bilangan: <input type='text' name='bilangan'><br><br>";
					echo "<input type='submit' value='Hitung'>";
					echo "</form>";
 
					if(isset($_POST['bilangan'])){
						$bilangan = $_POST['bilangan'];
						$faktorial = 1;
						for($i=$bilangan; $i>=1; $i--){
							$faktorial *= $i;
						}
						echo "<br>Hasil faktorial dari $bilangan adalah $faktorial";
					}
					break;
 
				case 'fibonacci':
					echo "<h3>Fungsi Fibonacci</h3>";
					echo "<form method='post'>";
					echo "Masukkan jumlah bilangan: <input type='text' name='jumlah'><br><br>";
					echo "<input type='submit' value='Hitung'>";
					echo "</form>";
 
					if(isset($_POST['jumlah'])){
						$jumlah = $_POST['jumlah'];
						$a = 0;
						$b = 1;
						echo "<br>Deret Fibonacci dengan $jumlah bilangan adalah:<br>";
						echo "$a, $b";
						for($i=2; $i<$jumlah; $i++){
							$c = $a + $b;
							echo ", $c";
							$a = $b;
							$b = $c;
						}
					}
					break;
 
				case 'suhu':
					echo "<h3>Konversi Suhu</h3>";
					echo "<form method='post'>";
					echo "Masukkan suhu dalam Celcius: <input type='text' name='celcius'><br><br>";
					echo "Masukkan suhu dalam Fahrenheit: <input type='text' name='fahrenheit'><br><br>";
					echo "Masukkan suhu dalam Kelvin: <input type='text' name='kelvin'><br><br>";
					echo "<input type='submit' value='Konversi'>";
					echo "</form>";
 
					if(isset($_POST['celcius'])){
						$celcius = $_POST['celcius'];
						$fahrenheit = ($celcius * 9/5) + 32;
						$kelvin = $celcius + 273.15;
						echo "<br>Hasil konversi suhu:<br>";
						echo "$celcius derajat Celcius = $fahrenheit derajat Fahrenheit<br>";
						echo "$celcius derajat Celcius = $kelvin derajat Kelvin<br>";
					}
				
					if(isset($_POST['fahrenheit'])){
						$fahrenheit = $_POST['fahrenheit'];
						$celcius = ($fahrenheit - 32) * 5/9;
						$kelvin = ($fahrenheit + 459.67) * 5/9;
						echo "<br>Hasil konversi suhu:<br>";
						echo "$fahrenheit derajat Fahrenheit = $celcius derajat Celcius<br>";
						echo "$fahrenheit derajat Fahrenheit = $kelvin derajat Kelvin<br>";
					}
				
					if(isset($_POST['kelvin'])){
						$kelvin = $_POST['kelvin'];
						$celcius = ($kelvin - 273.15);
						$fahrenheit = ($kelvin * 9/5) - 459.67;
						echo "<br>Hasil konversi suhu:<br>";
						echo "$kelvin derajat Kelvin = $celcius derajat Celcius<br>";
						echo "$kelvin derajat Kelvin = $fahrenheit derajat Fahrenheit<br>";
					}	
			}
		}
	?>
 
</body>
</html>
