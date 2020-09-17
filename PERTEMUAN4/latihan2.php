

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>tanggal</title>
 </head>
 <body>
 	<select>
 	<?php 
 	for ($i=1990; $i < 2021; $i++) { 
 		echo "<option> $i </option>";
 	}

 	 ?>
 	 </select>
 	 <select>
 	 	<?php 
 	 	$x = 1;
 	 	while ( $x <= 12) {
 	 		echo "<option> $x </option>";
 	 		$x++;
 	 	}
 	 	 ?>
 	 </select>

 	 <select>
 	 	<?php 
 	 	$z = 1;
 	 	do {
 	 		echo "<option> $z </option>";
 	 		$z++;
 	 	} while ($z <= 31);
 	 	 ?>
 	 </select>
 	 
 	 
 	
 </body>
 </html>