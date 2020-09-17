<html>
<head>
	<title>LATIHAN 1</title>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
	Masukan Nilai <input type="text" name="nilai" />
		<input type="submit" value="Proses" />
</form>
</body>
</html>

<?PHP
$angkaBln= $_POST['nilai'];
switch($angkaBln)
{
case  1:$angkaBln="Januari";
	break;
case  2:$angkaBln="Februari";
	break;
case  3:$angkaBln="Maret";
	break;
case  4:$angkaBln="April";
	break;
case  5:$angkaBln="Mei";
	break;
case  6:$angkaBln="Juni";
	break;
case  7:$angkaBln="Juli";
	break;
case  8:$angkaBln="Agustus";
	break;
case  9:$angkaBln="September";
	break;
case  10:$angkaBln="Oktober";
	break;
case  11:$angkaBln="November";
	break;
case  12:$angkaBln="Desember";
	break;
}
echo 'Nama Bulan sekarang adalah : '.$angkaBln. ',<br/>';

?>

<?PHP
$Bln= $_POST['nilai'];
switch($Bln)
{
case  1:$Bln="Januari";
	break;
case  2:$Bln="Februari";
	break;
case  3:$Bln="Maret";
	break;
case  4:$Bln="April";
	break;
case  5:$Bln="Mei";
	break;
case  6:$Bln="Juni";
	break;
case  7:$Bln="Juli";
	break;
case  8:$Bln="Agustus";
	break;
case  9:$Bln="September";
	break;
case  10:$Bln="Oktober";
	break;
case  11:$Bln="November";
	break;
case  12:$Bln="Desember";
	break;
}
echo 'Nama Bulan sekarang adalah : '.$angkaBln;
?>