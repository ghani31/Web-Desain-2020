<html>
<head><title>pertemuan2</title></head>
<body>
<form action="<?php $_server['php_self'];?>"method="get">
    bilangan 1 : <input type="text" name="bil1"/></br>
	bilangan 2 : <input type="text" name="bil2"/></br>
</form>
<?php
 echo 'bilangan 1 ='.$get['bil1'].'<br/>';
 echo 'bilangan 2 ='.$get['bil2'].'<br/>';
 $hasil = $_get ['bil1'].'<br/>';
 echo 'bil1 + bil2 ='.$hasil;
 ?>
 </body>
 </html>