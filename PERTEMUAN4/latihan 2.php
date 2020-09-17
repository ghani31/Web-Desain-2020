<?php 
$nama = "Agus";
$nilai_1 = 89;
$nilai_2 = 73;

$nilai = ($nilai_1 + $nilai_2) / 2;

if ($nilai > 85) {
	$grade = "A";
} elseif ($nilai > 75) {
	$grade = "B";
} elseif ($nilai > 65) {
	$grade = "C";
} else {
	$grade = "D";
}

if ($grade == "A") {
	$keterangan = "sangat baik";
} elseif ($grade == "B") {
	$keterangan = "baik";
} elseif ($grade == "C") {
	$keterangan = "cukup";
} else {
	$keterangan = "kurang";
}

 echo "Nama : ".$nama;
 echo "<br>Nilai : ".$nilai;
 echo "<br>Grade : ".$grade;
 echo "<br>Keterangan : ".$keterangan;



 ?>