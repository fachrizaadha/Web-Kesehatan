<?php
/*
$host="sql303.byethost14.com";
$user="b14_12018858";
$password="agusnuri87";
$database="b14_12018858_temanonline";
*/

$host="localhost";
$user="root";
$password="";
$database="db_lina";

ini_set('display_errors',TRUE);

$koneksi=mysql_connect($host,$user,$password);
mysql_select_db($database,$koneksi);
//cek koneksi
if($koneksi){
	//echo "berhasil koneksi";
}else{
	echo "gagal koneksi";
}

$entries=10;
$waktu=date('Y-m-d h:i:s');
?>