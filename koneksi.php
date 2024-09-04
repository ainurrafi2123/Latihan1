<?php
$conn=mysqli_connect('localhost','root','','daftar_pegawai');
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>