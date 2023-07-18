<?php
$server="LocalHost";
$username="root";
$password="";
$db = "university_db";

$connect=mysqli_connect($server,$username,$password);
$select_db=mysqli_select_db($db);
if($connect){
    echo "Berhasil terkoneksi";
        if($select_db){
            echo "Database ditemukan";
        } else {
            echo "Database tidak ditemukan";
        }
} else {
    echo "Gagal terkoneksi";
}
?>
