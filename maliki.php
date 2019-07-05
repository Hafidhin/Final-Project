
<?php
//mengecek apakah telah terdeklarasi
if (isset($_POST['daftar'])) {
    //digunakan untuk form dengan method post
    $nama=$_POST['nama'];
    $nim=$_POST['nim'];
    $email=$_POST['email'];
    $alamat=$_POST['alamat'];
    
    //membuka data.txt dan menulis
    $hfd=fopen('data.txt', 'a');

    //membaca isi dari file $hfd/data.txt yg sudah dibuka menggunakan fopen sebelumnya
    fwrite($hfd,"Nama   = ${nama} <br>");
    fwrite($hfd,"Nim    = ${nim} <br>");
    fwrite($hfd,"Email  = ${email} <br>");
    fwrite($hfd,"Alamat = ${alamat} <br>");
    fwrite($hfd,"<hr>");

    //menutup file
    echo readfile("data.txt");
    fclose($hfd);
 }
 ?>
 <a href="hafid.html">Kembali Ke home</a>
<?php /*Code diatas untuk kembali ke home*/
 ?>
