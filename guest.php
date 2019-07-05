
<?php
/*Untuk Meampilkan Data yg disimpan di txt*/ 
$myfile= fopen("data.txt", "r"); 
echo fgets($myfile); 
fclose($myfile); 
?>


 <a href="hafid.html">Kembali Ke home</a>
<?php /*Code diatas untuk kembali ke home*/
 ?>