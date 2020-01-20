<?php session_start();
require("./include/notice.php"); 
require("./include/koneksi.php"); 
require("./include/fungsi.php"); 
$id=$_POST["nama_prov"];
$tampil=$mysqli->query("SELECT distinct(kota) FROM profilkesehatan WHERE provinsi='$id'");
echo "<option selected>- Pilih Kota -</option>";
while($r=$tampil->fetch_assoc()){
echo "<option value=$r[kota]>$r[kota]</option>";
}
