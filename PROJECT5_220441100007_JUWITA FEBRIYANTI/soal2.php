<!DOCTYPE html>
<html>
<head>
	<title>Form Penjualan</title>
	<style>
    body{
      font-family: verdana;
      background-size: cover;
      background-position: center;
    }
    .menu{
      margin-top: 100px;
      width: max-content;
      background-color: #e6f32f;
      border: 5px solid #251D3A;
      padding: 3%;
      border-radius: 15px;
    }
    td{
      font-size: 22px;
    }
    select{
      border-radius:5px;
      width: 210px;
      height: 30px;
    }
    input{
      border-radius: 5px;
      width: 210px;
    	height: 30px;
    }
    button{
      width: 100px;
      height: 27px;
      background: linear-gradient(yellow,white);
      border-radius: 15px;
      font-size: 12px;
      font-weight: bold;
    }
  </style>
</head>
<body>
<?php 
error_reporting(0);
  if (isset($_POST['proses'])) {
		$nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];

    $jumlah = intval($jumlah);
  	$harga_total = $harga * $jumlah;
    $bonus = "-";

    switch ($harga_total) {
      case $harga_total >= 100000:
           $diskon = 5/100 * $harga_total;
           $bonus = "Totebag";
      		 break;
    	default:
           $diskon = 0;
           break;
        }
        
    $total_bayar = $harga_total - $diskon;
    }
    elseif (isset($_POST['hilang'])) {
        $nama = "";
        $harga = "";
        $jumlah = "";
        $harga_total = "";
        $diskon = "";
        $total_bayar = "";
        $bonus = "";
    }
 ?>

<center>
  <div class="menu">
  <table cellpadding="5">
  <caption><h2>PENJUALAN</h2></caption>
  <form action="" method="post">
    <tr>
      <td>Nama Barang</td>
      <td><select name="nama" id="nama">
          <option>Silahkan Pilih<br>
          <option>Buku<br>
          <option>Tas<br>
          <option>Topi<br>
          <option>Sepatu<br>
          </select></td>
      </tr>
      <tr>
        <td>Harga</td>
        <td><input type="text" name="harga" value="<?= $harga; ?>"></td>
      </tr>
      <tr>
        <td>Jumlah Barang</td>
        <td><input type="number" name="jumlah" value="<?= $jumlah; ?>"></td>
      </tr>
      <tr>
				<td></td>
				<td>
					<button type="submit" name="proses">BELI</button>
					<button type="submit" name="hilang">KOSONGKAN</button>
				</td>
      </tr>
    </form>
      <tr>
      	<td>Total Harga</td>
        <td><input type="text" name="total" value="<?= $harga_total; ?>"></td>
      </tr>
      <tr>
        <td>Diskon</td>
        <td><input type="text" name="diskon" value="<?= $diskon; ?>"></td>
      </tr>
      <tr>
        <td>Total Bayar</td>
        <td><input type="text" name="total_bayar" value="<?= $total_bayar; ?>"></td>
      </tr>
      <tr>
        <td>Bonus</td>
        <td><input type="text" name="bonus" value="<?= $bonus; ?>"></td>
      </tr>
    </table>
    </div>
</center>
  
</body>
</html>
