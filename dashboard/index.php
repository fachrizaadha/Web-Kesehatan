<?php session_start();
require("./include/notice.php"); 
require("./include/koneksi.php"); 
require("./include/fungsi.php"); 
/*if($_SESSION['ulevel']==''){
			echo "<script>document.location='./login';</script>";

}
*/
$uname=$_SESSION["uname"];
$uid=$_SESSION["uid"];
$ulevel=$_SESSION["ulevel"];
$page=$_GET["page"];
include"header.php";
?>
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <?php
if ($_GET{"page"}){
	$page="v_".$_GET{"page"}.".php";
	include "modul/$page";
	}else{
		include"home.php";
	}

	?>

      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>

  <?php include"footer.php";?>
