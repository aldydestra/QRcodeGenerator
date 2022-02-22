<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link href="css/style.css" rel="stylesheet">
	<title>Pembuat QRcode</title>
</head>

<body>
	<h1 style="text-align:center">Membuat QRcode dengan PHP dan Library QR</h1>
	<p>
	<form method="post" action="">
		<p>
		<h3 style="text-align:center" for="qr_code_data">Masukkan data yang akan dibuat QRcode
		</h3>
		<center><input type="text" name="data" id="qr_code_data" minlength="4" required value="<?php $val = isset($_POST['generate']) ? $_POST['qr_code_data'] : "";
																								echo $val; ?>"></center>
		</p>
		<p>
			<center><input type="submit" name="buat" id="btn_submit" value="Buat QRCode"></center>
		</p>
	</form>
	</p>
	<p>
		<?php
		//proses
		if (isset($_POST['buat'])) {
			include "lib/php-qrcode-library/qrlib.php";
			/*membuat folder*/
			$tempdir = "output/";
			if (!file_exists($tempdir))
				mkdir($tempdir, 0755);
			$file_name = date("Ymd") . rand() . ".png";
			$file_path = $tempdir . $file_name;

			QRcode::png($_POST['data'], $file_path, "H", 12, 4);
			/* param (1)qrcontent,(2)filename,(3)errorcorrectionlevel,(4)pixelwidth,(5)margin */

			echo "<br>";
			echo "<center><p class='sukses'>QR Code berhasil dibuat</p></center>";
			echo "<center><p><img src='" . $file_path . "' /></p></center>";
		}
		?>
</body>

</html>