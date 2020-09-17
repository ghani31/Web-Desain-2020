<?php 

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
 </head>
 <body>
 	<form action="" method="post">
        Nama <input type="text" name="nama"><br>
		Golongan <input type="text" name="golongan"><br>
        Jam Lembur <input type="text" name="jamlembur"><br>
		<button type="sumbit" name="sumbit">Sumbit</button>
	</form>
 </body>
 </html>
 <?php 
if (isset($_POST['sumbit'])) {
    $nama = $_POST['nama'];
    $golongan = $_POST['golongan'];
    $jamlembur = $_POST['jamlembur'];

   $gaji = 150 * 75000;
   $upahlembur = 75000;
   $gajilembur = $jamlembur * (0.25 * $upahlembur);
   $total = $gajilembur * $gaji;
   $gajibersih = $total * 4;

    echo "Nama Anda :".$nama;
    echo " <br> Golongan Anda :".$golongan; 
    echo " <br> Jam Lembur :".$jamlembur;
    echo " <br> Gajih Lembur : Rp.".$gajilembur;
    echo " <br> Gajih Bersih : Rp.".$gajibersih;
    
}
 ?>