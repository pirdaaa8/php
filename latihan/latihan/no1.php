<?php 

$nama = "Raura Donita";
$umur = "16";
$kelas = "X RPL 2";
$tempat = "jakarta, 03 januari 2008";
$nomor = "0895-0887-2965";
$alamat = "kebon kacang 49";


function myBiodata(){
    global $nama, $umur, $kelas, $tempat, $nomor, $alamat;
    echo "Nama Lengkap : $nama <br / >";
    echo "Umur : $umur <br />";
    echo "Kelas : $kelas <br />";
    echo "Tempat : $tempat <br />";
    echo "Nomor : $nomor <br />";
    echo "Alamat : $alamat <br />";
    
}


?>