<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator</title>
	<style>
body {
  background-image: url(bg.jpg);
	background-size: 100rem;
  font-family: Arial, sans-serif;
}

h2 {
  color: #090909;
  text-align: center;
  margin-top: 30px;
}

form {
  background-color: #ea83cf;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0px 0px 10px #ddd;
  max-width: 500px;
  margin: 30px auto;
}

form input[type="text"],
form input[type="submit"] {
  font-size: 18px;
  padding: 10px;
  width: 99%;
  border-radius: 5px;
  border: none;
  margin-bottom: 20px;
}

form input[type="submit"] {
  background-color: #953e7e;
  color: #fff;
  cursor: pointer;
}

form input[type="submit"]:hover {
  background-color: #555;
}

.result {
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0px 0px 10px #ddd;
  max-width: 500px;
  margin: 30px auto;
}

.result p {
  font-size: 18px;
  margin: 0;
  padding: 10px;
  border-bottom: 1px solid #ddd;
}

.result p:last-child {
  border: none;
}

	</style>
</head>
<body>
	<h2>KALKULATOR</h2>

	<form method="post">
		Masukkan data (pisahkan dengan koma):<br><br>
		<input type="text" name="data"><br>
		<input type="submit" value="Hitung">
	</form>

	<?php
		if(isset($_POST['data'])){
			$data = explode(",", $_POST['data']);
			$count = count($data);
			$sum = array_sum($data);
			$mean = $sum / $count;
			$modus = array_count_values($data);
			arsort($modus);
			$max = max($data);
			$min = min($data);

			echo "<br>";
			echo "Mean: $mean<br>";
			echo "Modus: ";
			foreach($modus as $key => $value){
				if($value == max($modus)){
					echo "$key ";
				}
			}
			echo "<br>";
			echo "Max: $max<br>";
			echo "Min: $min<br>";
		}
	?>

</body>
</html>
