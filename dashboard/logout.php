<?php
  session_start();
require("./include/notice.php"); 
require("./include/koneksi.php"); 
require("./include/fungsi.php"); 
$uname=$_SESSION["uname"];
$uid=$_SESSION["uid"];
$ulevel=$_SESSION["ulevel"];
if($ulevel=="admin"){
	$mysqli->query("UPDATE users set `online` = 'no' WHERE id_user='$uid'");
}else if($ulevel=="dosen"){
	$mysqli->query("UPDATE dosen set `online` = 'no' WHERE nid='$uid'");
}else if($ulevel=="mahasiswa"){
	$mysqli->query("UPDATE mahasiswa set `online` = 'no' WHERE nim='$uid'");
}
session_destroy();
  echo "<script>alert('Anda telah keluar'); window.location = 'index.php'</script>";
?>
