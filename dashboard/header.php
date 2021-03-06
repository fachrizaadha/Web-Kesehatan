
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>::.. Sistem Kesehatan Indonesia</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
      <!-- Select2 -->
  <link rel="stylesheet" href="assets/plugins/select2/dist/css/select2.min.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="assets/plugins/datepicker/datepicker3.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
 <link rel="stylesheet" href="assets/dist/css/skins/skin-blue.min.css">
  <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  
  <script src="assets/plugins/sweetalert-master/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/plugins/sweetalert-master/dist/sweetalert.css"/>
    
<!-- jQuery 2.2.3 -->
<script src="assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<!-- <div class="container">
 
   <div class="row">
       
        <div class="col-md-12">
        <img src="assets/img/logo.jpg" class="img-responsive" height="120px" width="120px">
        </div>
        </div>
 </div>
-->
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar">
      <div class="container">
        <div class="navbar-header">
          <a href="../" class="navbar-brand">
          <!--<img src="assets/img/logon.png" width="83px" align="left" style="margin-top:-10px; margin-right:5px">--><b>DATA KESEHATAN </b></a>
           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
          			<li >
                    <a href="../"><i class="fa fa-home"></i> Home </a>
                    </li>
       
                    <li <?php if($_GET["page"]==""){?>class="active"<?php }?>>
          	<a href="./" ><i class="fa fa-dashboard"></i> Dashboard</a></li>

          <li <?php if($_GET["page"]=="data"){?>class="active"<?php }?>>
          	<a href="?page=data" ><i class="fa fa-cubes"></i> Data</a></li>
              <li <?php if($_GET["page"]=="grafik"){?>class="active"<?php }?>>
          	<a href="?page=grafik" ><i class="fa fa-line-chart"></i> Grafik</a></li>


<!--           
		   <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
			-->
          </ul>
        
        </div>
        <!-- /.navbar-collapse -->
       
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
      
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->